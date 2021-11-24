<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppointmentsFixture
 */
class AppointmentsFixture extends TestFixture
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
                'doctor_id' => 1,
                'appointment_date' => '2021-11-24 18:01:40',
                'created' => '2021-11-24 18:01:40',
                'modified' => '2021-11-24 18:01:40',
            ],
        ];
        parent::init();
    }
}
