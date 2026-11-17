<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalCodingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TELEHEALTH'|'IN_PERSON'|null $encounterType
 * @property string|null $encounterReason
 * @property bool|null $afterHours
 * @property string|null $encounterDate
 * @property int<1, 1440>|null $encounterDurationMinutes
 */
class MedicalCodesEncounterContext extends Shape
{
    /**
     * @param array{
     *     encounterType?: 'TELEHEALTH'|'IN_PERSON'|null,
     *     encounterReason?: string|null,
     *     afterHours?: bool|null,
     *     encounterDate?: string|null,
     *     encounterDurationMinutes?: int<1, 1440>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
