<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupArn
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierFeatureName
 * @property string $EventTimeFeatureName
 * @property list<FeatureDefinition> $FeatureDefinitions
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property OnlineStoreConfig $OnlineStoreConfig
 * @property OfflineStoreConfig $OfflineStoreConfig
 * @property string $RoleArn
 * @property 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed' $FeatureGroupStatus
 * @property OfflineStoreStatus $OfflineStoreStatus
 * @property LastUpdateStatus $LastUpdateStatus
 * @property string $FailureReason
 * @property string $Description
 * @property list<Tag> $Tags
 */
class FeatureGroup extends Shape
{
    /**
     * @param array{
     *     FeatureGroupArn?: string,
     *     FeatureGroupName?: string,
     *     RecordIdentifierFeatureName?: string,
     *     EventTimeFeatureName?: string,
     *     FeatureDefinitions?: list<FeatureDefinition>,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     OnlineStoreConfig?: OnlineStoreConfig,
     *     OfflineStoreConfig?: OfflineStoreConfig,
     *     RoleArn?: string,
     *     FeatureGroupStatus?: 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed',
     *     OfflineStoreStatus?: OfflineStoreStatus,
     *     LastUpdateStatus?: LastUpdateStatus,
     *     FailureReason?: string,
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
