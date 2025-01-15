<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeatureGroupArn
 * @property string|null $FeatureGroupName
 * @property string|null $RecordIdentifierFeatureName
 * @property string|null $EventTimeFeatureName
 * @property list<FeatureDefinition>|null $FeatureDefinitions
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property OnlineStoreConfig|null $OnlineStoreConfig
 * @property OfflineStoreConfig|null $OfflineStoreConfig
 * @property string|null $RoleArn
 * @property 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed'|null $FeatureGroupStatus
 * @property OfflineStoreStatus|null $OfflineStoreStatus
 * @property LastUpdateStatus|null $LastUpdateStatus
 * @property string|null $FailureReason
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class FeatureGroup extends Shape
{
    /**
     * @param array{
     *     FeatureGroupArn?: string|null,
     *     FeatureGroupName?: string|null,
     *     RecordIdentifierFeatureName?: string|null,
     *     EventTimeFeatureName?: string|null,
     *     FeatureDefinitions?: list<FeatureDefinition>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     OnlineStoreConfig?: OnlineStoreConfig|null,
     *     OfflineStoreConfig?: OfflineStoreConfig|null,
     *     RoleArn?: string|null,
     *     FeatureGroupStatus?: 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed'|null,
     *     OfflineStoreStatus?: OfflineStoreStatus|null,
     *     LastUpdateStatus?: LastUpdateStatus|null,
     *     FailureReason?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
