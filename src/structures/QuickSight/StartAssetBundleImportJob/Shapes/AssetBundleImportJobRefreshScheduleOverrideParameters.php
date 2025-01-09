<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property string $ScheduleId
 * @property \Aws\Api\DateTimeResult $StartAfterDateTime
 */
class AssetBundleImportJobRefreshScheduleOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DataSetId: string,
     *     ScheduleId: string,
     *     StartAfterDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
