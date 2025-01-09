<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int $InstalledCount
 * @property int $MissingCount
 * @property int $FailedCount
 * @property int $InstalledOtherCount
 * @property int $InstalledRejectedCount
 * @property int $InstalledPendingReboot
 * @property string $OperationStartTime
 * @property string $OperationEndTime
 * @property string $RebootOption
 * @property string $Operation
 */
class PatchSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     InstalledCount?: int,
     *     MissingCount?: int,
     *     FailedCount?: int,
     *     InstalledOtherCount?: int,
     *     InstalledRejectedCount?: int,
     *     InstalledPendingReboot?: int,
     *     OperationStartTime?: string,
     *     OperationEndTime?: string,
     *     RebootOption?: string,
     *     Operation?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
