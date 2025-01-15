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
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\OnlineStoreConfig|null $OnlineStoreConfig
 * @property Shapes\OfflineStoreConfig|null $OfflineStoreConfig
 * @property Shapes\ThroughputConfigDescription|null $ThroughputConfig
 * @property string|null $RoleArn
 * @property 'Creating'|'Created'|'CreateFailed'|'Deleting'|'DeleteFailed'|null $FeatureGroupStatus
 * @property Shapes\OfflineStoreStatus|null $OfflineStoreStatus
 * @property Shapes\LastUpdateStatus|null $LastUpdateStatus
 * @property string|null $FailureReason
 * @property string|null $Description
 * @property string $NextToken
 * @property int|null $OnlineStoreTotalSizeBytes
 */
class DescribeFeatureGroupResponse extends Response
{
}
