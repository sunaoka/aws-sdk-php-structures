<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ReportInstrumentationConfigurationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property 'SNAPSHOT' $SignalType
 * @property string $LocationHash
 * @property 'READY'|'ERROR'|'ACTIVE'|'DISABLED' $Status
 * @property \Aws\Api\DateTimeResult $Time
 * @property 'THROTTLED'|'INTERNAL_ERROR'|'VALIDATION_ERROR' $FailedReason
 */
class UnprocessedStatusEvent extends Shape
{
    /**
     * @param array{
     *     InstrumentationType: 'BREAKPOINT'|'PROBE',
     *     SignalType: 'SNAPSHOT',
     *     LocationHash: string,
     *     Status: 'READY'|'ERROR'|'ACTIVE'|'DISABLED',
     *     Time: \Aws\Api\DateTimeResult,
     *     FailedReason: 'THROTTLED'|'INTERNAL_ERROR'|'VALIDATION_ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
