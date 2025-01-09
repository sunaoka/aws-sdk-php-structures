<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $bucketCount
 * @property Shapes\BucketCountByEffectivePermission $bucketCountByEffectivePermission
 * @property Shapes\BucketCountByEncryptionType $bucketCountByEncryptionType
 * @property Shapes\BucketCountPolicyAllowsUnencryptedObjectUploads $bucketCountByObjectEncryptionRequirement
 * @property Shapes\BucketCountBySharedAccessType $bucketCountBySharedAccessType
 * @property Shapes\BucketStatisticsBySensitivity $bucketStatisticsBySensitivity
 * @property int $classifiableObjectCount
 * @property int $classifiableSizeInBytes
 * @property \Aws\Api\DateTimeResult $lastUpdated
 * @property int $objectCount
 * @property int $sizeInBytes
 * @property int $sizeInBytesCompressed
 * @property Shapes\ObjectLevelStatistics $unclassifiableObjectCount
 * @property Shapes\ObjectLevelStatistics $unclassifiableObjectSizeInBytes
 */
class GetBucketStatisticsResponse extends Response
{
}
