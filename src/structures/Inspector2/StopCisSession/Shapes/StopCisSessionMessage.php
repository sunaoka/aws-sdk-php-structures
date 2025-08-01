<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'FAILED'|'INTERRUPTED'|'UNSUPPORTED_OS' $status
 * @property string|null $reason
 * @property StopCisMessageProgress $progress
 * @property ComputePlatform|null $computePlatform
 * @property string|null $benchmarkVersion
 * @property string|null $benchmarkProfile
 */
class StopCisSessionMessage extends Shape
{
    /**
     * @param array{
     *     status: 'SUCCESS'|'FAILED'|'INTERRUPTED'|'UNSUPPORTED_OS',
     *     reason?: string|null,
     *     progress: StopCisMessageProgress,
     *     computePlatform?: ComputePlatform|null,
     *     benchmarkVersion?: string|null,
     *     benchmarkProfile?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
