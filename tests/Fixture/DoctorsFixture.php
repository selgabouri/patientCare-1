<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoctorsFixture
 */
class DoctorsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'accepting_patients' => 1,
                'created' => '2021-11-24 18:01:11',
                'modified' => '2021-11-24 18:01:11',
            ],
        ];
        parent::init();
    }
}
