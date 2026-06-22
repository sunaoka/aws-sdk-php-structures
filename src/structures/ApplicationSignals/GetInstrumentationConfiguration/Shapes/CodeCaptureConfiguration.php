<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetInstrumentationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CaptureArguments
 * @property bool|null $CaptureReturn
 * @property bool|null $CaptureStackTrace
 * @property list<string>|null $CaptureLocals
 * @property CaptureLimitsConfig $CaptureLimits
 */
class CodeCaptureConfiguration extends Shape
{
    /**
     * @param array{
     *     CaptureArguments?: list<string>|null,
     *     CaptureReturn?: bool|null,
     *     CaptureStackTrace?: bool|null,
     *     CaptureLocals?: list<string>|null,
     *     CaptureLimits: CaptureLimitsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
