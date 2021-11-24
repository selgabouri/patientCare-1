<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carriers Model
 *
 * @property \App\Model\Table\PatientsTable&\Cake\ORM\Association\HasMany $Patients
 *
 * @method \App\Model\Entity\Carrier newEmptyEntity()
 * @method \App\Model\Entity\Carrier newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Carrier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carrier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carrier findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Carrier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carrier[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carrier|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrier saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrier[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carrier[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carrier[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carrier[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarriersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carriers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Patients', [
            'foreignKey' => 'carrier_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 225)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('carrier_code')
            ->maxLength('carrier_code', 225)
            ->requirePresence('carrier_code', 'create')
            ->notEmptyString('carrier_code');

        return $validator;
    }
}
