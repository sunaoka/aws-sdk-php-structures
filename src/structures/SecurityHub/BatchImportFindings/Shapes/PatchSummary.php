<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int|null $InstalledCount
 * @property int|null $MissingCount
 * @property int|null $FailedCount
 * @property int|null $InstalledOtherCount
 * @property int|null $InstalledRejectedCount
 * @property int|null $InstalledPendingReboot
 * @property string|null $OperationStartTime
 * @property string|null $OperationEndTime
 * @property string|null $RebootOption
 * @property string|null $Operation
 */
class PatchSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     InstalledCount?: int|null,
     *     MissingCount?: int|null,
     *     FailedCount?: int|null,
     *     InstalledOtherCount?: int|null,
     *     InstalledRejectedCount?: int|null,
     *     InstalledPendingReboot?: int|null,
     *     OperationStartTime?: string|null,
     *     OperationEndTime?: string|null,
     *     RebootOption?: string|null,
     *     Operation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
