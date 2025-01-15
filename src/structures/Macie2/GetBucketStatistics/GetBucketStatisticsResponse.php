<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $bucketCount
 * @property Shapes\BucketCountByEffectivePermission|null $bucketCountByEffectivePermission
 * @property Shapes\BucketCountByEncryptionType|null $bucketCountByEncryptionType
 * @property Shapes\BucketCountPolicyAllowsUnencryptedObjectUploads|null $bucketCountByObjectEncryptionRequirement
 * @property Shapes\BucketCountBySharedAccessType|null $bucketCountBySharedAccessType
 * @property Shapes\BucketStatisticsBySensitivity|null $bucketStatisticsBySensitivity
 * @property int|null $classifiableObjectCount
 * @property int|null $classifiableSizeInBytes
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 * @property int|null $objectCount
 * @property int|null $sizeInBytes
 * @property int|null $sizeInBytesCompressed
 * @property Shapes\ObjectLevelStatistics|null $unclassifiableObjectCount
 * @property Shapes\ObjectLevelStatistics|null $unclassifiableObjectSizeInBytes
 */
class GetBucketStatisticsResponse extends Response
{
}
