<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ReportInstrumentationConfigurationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property 'SNAPSHOT' $SignalType
 * @property string $LocationHash
 * @property 'READY'|'ERROR'|'ACTIVE'|'DISABLED' $Status
 * @property \Aws\Api\DateTimeResult $Time
 * @property 'FILE_NOT_FOUND'|'METHOD_NOT_FOUND'|'LINE_NOT_EXECUTABLE'|'OVERLOADED_METHODS'|'LANGUAGE_MISMATCH'|'RUNTIME_ERROR'|null $ErrorCause
 */
class InstrumentationConfigurationStatusReport extends Shape
{
    /**
     * @param array{
     *     InstrumentationType: 'BREAKPOINT'|'PROBE',
     *     SignalType: 'SNAPSHOT',
     *     LocationHash: string,
     *     Status: 'READY'|'ERROR'|'ACTIVE'|'DISABLED',
     *     Time: \Aws\Api\DateTimeResult,
     *     ErrorCause?: 'FILE_NOT_FOUND'|'METHOD_NOT_FOUND'|'LINE_NOT_EXECUTABLE'|'OVERLOADED_METHODS'|'LANGUAGE_MISMATCH'|'RUNTIME_ERROR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
