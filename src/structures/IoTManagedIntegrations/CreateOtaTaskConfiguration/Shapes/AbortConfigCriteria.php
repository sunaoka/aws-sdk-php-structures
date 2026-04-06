<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CANCEL'|null $Action
 * @property 'FAILED'|'REJECTED'|'TIMED_OUT'|'ALL'|null $FailureType
 * @property int<1, 100>|null $MinNumberOfExecutedThings
 * @property double|null $ThresholdPercentage
 */
class AbortConfigCriteria extends Shape
{
    /**
     * @param array{
     *     Action?: 'CANCEL'|null,
     *     FailureType?: 'FAILED'|'REJECTED'|'TIMED_OUT'|'ALL'|null,
     *     MinNumberOfExecutedThings?: int<1, 100>|null,
     *     ThresholdPercentage?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
