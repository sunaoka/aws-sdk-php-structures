<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $benchmarkProfile
 * @property string|null $benchmarkVersion
 * @property ComputePlatform|null $computePlatform
 * @property StopCisMessageProgress $progress
 * @property string|null $reason
 * @property 'SUCCESS'|'FAILED'|'INTERRUPTED'|'UNSUPPORTED_OS' $status
 */
class StopCisSessionMessage extends Shape
{
    /**
     * @param array{
     *     benchmarkProfile?: string|null,
     *     benchmarkVersion?: string|null,
     *     computePlatform?: ComputePlatform|null,
     *     progress: StopCisMessageProgress,
     *     reason?: string|null,
     *     status: 'SUCCESS'|'FAILED'|'INTERRUPTED'|'UNSUPPORTED_OS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
