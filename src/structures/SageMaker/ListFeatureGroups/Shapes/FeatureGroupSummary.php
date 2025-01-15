<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListFeatureGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupName
 * @property string $FeatureGroupArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed'|null $FeatureGroupStatus
 * @property OfflineStoreStatus|null $OfflineStoreStatus
 */
class FeatureGroupSummary extends Shape
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     FeatureGroupArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     FeatureGroupStatus?: 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed'|null,
     *     OfflineStoreStatus?: OfflineStoreStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
