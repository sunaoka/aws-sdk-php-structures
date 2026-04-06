<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'TRUE'|'FALSE'|'UNKNOWN'|null $allowsUnencryptedObjectUploads
 * @property 'MONITORED'|'NOT_MONITORED'|null $automatedDiscoveryMonitoringStatus
 * @property string|null $bucketArn
 * @property \Aws\Api\DateTimeResult|null $bucketCreatedAt
 * @property string|null $bucketName
 * @property int|null $classifiableObjectCount
 * @property int|null $classifiableSizeInBytes
 * @property 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA'|null $errorCode
 * @property string|null $errorMessage
 * @property JobDetails|null $jobDetails
 * @property \Aws\Api\DateTimeResult|null $lastAutomatedDiscoveryTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 * @property int|null $objectCount
 * @property ObjectCountByEncryptionType|null $objectCountByEncryptionType
 * @property BucketPublicAccess|null $publicAccess
 * @property string|null $region
 * @property ReplicationDetails|null $replicationDetails
 * @property int|null $sensitivityScore
 * @property BucketServerSideEncryption|null $serverSideEncryption
 * @property 'EXTERNAL'|'INTERNAL'|'NOT_SHARED'|'UNKNOWN'|null $sharedAccess
 * @property int|null $sizeInBytes
 * @property int|null $sizeInBytesCompressed
 * @property list<KeyValuePair>|null $tags
 * @property ObjectLevelStatistics|null $unclassifiableObjectCount
 * @property ObjectLevelStatistics|null $unclassifiableObjectSizeInBytes
 * @property bool|null $versioning
 */
class BucketMetadata extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     allowsUnencryptedObjectUploads?: 'TRUE'|'FALSE'|'UNKNOWN'|null,
     *     automatedDiscoveryMonitoringStatus?: 'MONITORED'|'NOT_MONITORED'|null,
     *     bucketArn?: string|null,
     *     bucketCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     bucketName?: string|null,
     *     classifiableObjectCount?: int|null,
     *     classifiableSizeInBytes?: int|null,
     *     errorCode?: 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA'|null,
     *     errorMessage?: string|null,
     *     jobDetails?: JobDetails|null,
     *     lastAutomatedDiscoveryTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null,
     *     objectCount?: int|null,
     *     objectCountByEncryptionType?: ObjectCountByEncryptionType|null,
     *     publicAccess?: BucketPublicAccess|null,
     *     region?: string|null,
     *     replicationDetails?: ReplicationDetails|null,
     *     sensitivityScore?: int|null,
     *     serverSideEncryption?: BucketServerSideEncryption|null,
     *     sharedAccess?: 'EXTERNAL'|'INTERNAL'|'NOT_SHARED'|'UNKNOWN'|null,
     *     sizeInBytes?: int|null,
     *     sizeInBytesCompressed?: int|null,
     *     tags?: list<KeyValuePair>|null,
     *     unclassifiableObjectCount?: ObjectLevelStatistics|null,
     *     unclassifiableObjectSizeInBytes?: ObjectLevelStatistics|null,
     *     versioning?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
