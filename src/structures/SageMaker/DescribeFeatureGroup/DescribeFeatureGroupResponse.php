<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FeatureGroupArn
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierFeatureName
 * @property string $EventTimeFeatureName
 * @property list<Shapes\FeatureDefinition> $FeatureDefinitions
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\OnlineStoreConfig $OnlineStoreConfig
 * @property Shapes\OfflineStoreConfig $OfflineStoreConfig
 * @property Shapes\ThroughputConfigDescription $ThroughputConfig
 * @property string $RoleArn
 * @property 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed' $FeatureGroupStatus
 * @property Shapes\OfflineStoreStatus $OfflineStoreStatus
 * @property Shapes\LastUpdateStatus $LastUpdateStatus
 * @property string $FailureReason
 * @property string $Description
 * @property string $NextToken
 * @property int $OnlineStoreTotalSizeBytes
 */
class DescribeFeatureGroupResponse extends Response
{
}
