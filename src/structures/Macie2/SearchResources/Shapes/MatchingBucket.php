<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'MONITORED'|'NOT_MONITORED' $automatedDiscoveryMonitoringStatus
 * @property string $bucketName
 * @property int $classifiableObjectCount
 * @property int $classifiableSizeInBytes
 * @property 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA' $errorCode
 * @property string $errorMessage
 * @property JobDetails $jobDetails
 * @property \Aws\Api\DateTimeResult $lastAutomatedDiscoveryTime
 * @property int $objectCount
 * @property ObjectCountByEncryptionType $objectCountByEncryptionType
 * @property int $sensitivityScore
 * @property int $sizeInBytes
 * @property int $sizeInBytesCompressed
 * @property ObjectLevelStatistics $unclassifiableObjectCount
 * @property ObjectLevelStatistics $unclassifiableObjectSizeInBytes
 */
class MatchingBucket extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     automatedDiscoveryMonitoringStatus?: 'MONITORED'|'NOT_MONITORED',
     *     bucketName?: string,
     *     classifiableObjectCount?: int,
     *     classifiableSizeInBytes?: int,
     *     errorCode?: 'ACCESS_DENIED'|'BUCKET_COUNT_EXCEEDS_QUOTA',
     *     errorMessage?: string,
     *     jobDetails?: JobDetails,
     *     lastAutomatedDiscoveryTime?: \Aws\Api\DateTimeResult,
     *     objectCount?: int,
     *     objectCountByEncryptionType?: ObjectCountByEncryptionType,
     *     sensitivityScore?: int,
     *     sizeInBytes?: int,
     *     sizeInBytesCompressed?: int,
     *     unclassifiableObjectCount?: ObjectLevelStatistics,
     *     unclassifiableObjectSizeInBytes?: ObjectLevelStatistics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
