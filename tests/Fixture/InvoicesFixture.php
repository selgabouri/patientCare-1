<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoicesFixture
 */
class InvoicesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'patient_id' => 1,
                'amount' => 1.5,
                'services' => 'Lorem ipsum dolor sit amet',
                'due' => '2021-11-24',
                'created' => '2021-11-24 18:02:07',
                'modified' => '2021-11-24 18:02:07',
            ],
        ];
        parent::init();
    }
}
