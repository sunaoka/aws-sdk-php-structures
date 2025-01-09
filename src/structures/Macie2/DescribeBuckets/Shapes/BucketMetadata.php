<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'TRUE'|'FALSE'|'UNKNOWN' $allowsUnencryptedObjectUploads
 * @property 'MONITORED'|'NOT_MONITORED' $automatedDiscoveryMonitoringStatus
 * @property string $bucketArn
 * @property \Aws\Api\DateTimeResult $bucketCreatedAt
 * @property string $bucketName
 * @property int $classifiableObjectCount
 * @property int $classifiableSizeInBytes
 * @property 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA' $errorCode
 * @property string $errorMessage
 * @property JobDetails $jobDetails
 * @property \Aws\Api\DateTimeResult $lastAutomatedDiscoveryTime
 * @property \Aws\Api\DateTimeResult $lastUpdated
 * @property int $objectCount
 * @property ObjectCountByEncryptionType $objectCountByEncryptionType
 * @property BucketPublicAccess $publicAccess
 * @property string $region
 * @property ReplicationDetails $replicationDetails
 * @property int $sensitivityScore
 * @property BucketServerSideEncryption $serverSideEncryption
 * @property 'EXTERNAL'|'INTERNAL'|'NOT_SHARED'|'UNKNOWN' $sharedAccess
 * @property int $sizeInBytes
 * @property int $sizeInBytesCompressed
 * @property list<KeyValuePair> $tags
 * @property ObjectLevelStatistics $unclassifiableObjectCount
 * @property ObjectLevelStatistics $unclassifiableObjectSizeInBytes
 * @property bool $versioning
 */
class BucketMetadata extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     allowsUnencryptedObjectUploads?: 'TRUE'|'FALSE'|'UNKNOWN',
     *     automatedDiscoveryMonitoringStatus?: 'MONITORED'|'NOT_MONITORED',
     *     bucketArn?: string,
     *     bucketCreatedAt?: \Aws\Api\DateTimeResult,
     *     bucketName?: string,
     *     classifiableObjectCount?: int,
     *     classifiableSizeInBytes?: int,
     *     errorCode?: 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA',
     *     errorMessage?: string,
     *     jobDetails?: JobDetails,
     *     lastAutomatedDiscoveryTime?: \Aws\Api\DateTimeResult,
     *     lastUpdated?: \Aws\Api\DateTimeResult,
     *     objectCount?: int,
     *     objectCountByEncryptionType?: ObjectCountByEncryptionType,
     *     publicAccess?: BucketPublicAccess,
     *     region?: string,
     *     replicationDetails?: ReplicationDetails,
     *     sensitivityScore?: int,
     *     serverSideEncryption?: BucketServerSideEncryption,
     *     sharedAccess?: 'EXTERNAL'|'INTERNAL'|'NOT_SHARED'|'UNKNOWN',
     *     sizeInBytes?: int,
     *     sizeInBytesCompressed?: int,
     *     tags?: list<KeyValuePair>,
     *     unclassifiableObjectCount?: ObjectLevelStatistics,
     *     unclassifiableObjectSizeInBytes?: ObjectLevelStatistics,
     *     versioning?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
