<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $encounterReason
 */
class PatientInsightsEncounterContext extends Shape
{
    /**
     * @param array{encounterReason: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
