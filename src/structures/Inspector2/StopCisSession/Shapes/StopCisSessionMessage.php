<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $benchmarkProfile
 * @property string $benchmarkVersion
 * @property ComputePlatform $computePlatform
 * @property StopCisMessageProgress $progress
 * @property string $reason
 * @property 'SUCCESS'|'FAILED'|'INTERRUPTED'|'UNSUPPORTED_OS' $status
 */
class StopCisSessionMessage extends Shape
{
    /**
     * @param array{
     *     benchmarkProfile?: string,
     *     benchmarkVersion?: string,
     *     computePlatform?: ComputePlatform,
     *     progress: StopCisMessageProgress,
     *     reason?: string,
     *     status: 'SUCCESS'|'FAILED'|'INTERRUPTED'|'UNSUPPORTED_OS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
