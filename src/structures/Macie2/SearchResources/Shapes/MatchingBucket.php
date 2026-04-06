<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'MONITORED'|'NOT_MONITORED'|null $automatedDiscoveryMonitoringStatus
 * @property string|null $bucketName
 * @property int|null $classifiableObjectCount
 * @property int|null $classifiableSizeInBytes
 * @property 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA'|null $errorCode
 * @property string|null $errorMessage
 * @property JobDetails|null $jobDetails
 * @property \Aws\Api\DateTimeResult|null $lastAutomatedDiscoveryTime
 * @property int|null $objectCount
 * @property ObjectCountByEncryptionType|null $objectCountByEncryptionType
 * @property int|null $sensitivityScore
 * @property int|null $sizeInBytes
 * @property int|null $sizeInBytesCompressed
 * @property ObjectLevelStatistics|null $unclassifiableObjectCount
 * @property ObjectLevelStatistics|null $unclassifiableObjectSizeInBytes
 */
class MatchingBucket extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     automatedDiscoveryMonitoringStatus?: 'MONITORED'|'NOT_MONITORED'|null,
     *     bucketName?: string|null,
     *     classifiableObjectCount?: int|null,
     *     classifiableSizeInBytes?: int|null,
     *     errorCode?: 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA'|null,
     *     errorMessage?: string|null,
     *     jobDetails?: JobDetails|null,
     *     lastAutomatedDiscoveryTime?: \Aws\Api\DateTimeResult|null,
     *     objectCount?: int|null,
     *     objectCountByEncryptionType?: ObjectCountByEncryptionType|null,
     *     sensitivityScore?: int|null,
     *     sizeInBytes?: int|null,
     *     sizeInBytesCompressed?: int|null,
     *     unclassifiableObjectCount?: ObjectLevelStatistics|null,
     *     unclassifiableObjectSizeInBytes?: ObjectLevelStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
