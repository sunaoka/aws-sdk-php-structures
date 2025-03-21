<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property string $ScheduleId
 * @property \Aws\Api\DateTimeResult|null $StartAfterDateTime
 */
class AssetBundleImportJobRefreshScheduleOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DataSetId: string,
     *     ScheduleId: string,
     *     StartAfterDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
