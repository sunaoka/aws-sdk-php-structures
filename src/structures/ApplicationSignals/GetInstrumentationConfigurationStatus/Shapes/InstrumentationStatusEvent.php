<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetInstrumentationConfigurationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Time
 * @property 'FILE_NOT_FOUND'|'METHOD_NOT_FOUND'|'LINE_NOT_EXECUTABLE'|'OVERLOADED_METHODS'|'LANGUAGE_MISMATCH'|'RUNTIME_ERROR'|null $ErrorCause
 */
class InstrumentationStatusEvent extends Shape
{
    /**
     * @param array{
     *     Time: \Aws\Api\DateTimeResult,
     *     ErrorCause?: 'FILE_NOT_FOUND'|'METHOD_NOT_FOUND'|'LINE_NOT_EXECUTABLE'|'OVERLOADED_METHODS'|'LANGUAGE_MISMATCH'|'RUNTIME_ERROR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
