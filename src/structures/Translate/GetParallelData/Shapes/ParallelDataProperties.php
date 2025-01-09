<?php

namespace Sunaoka\Aws\Structures\Translate\GetParallelData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Description
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property string $SourceLanguageCode
 * @property list<string> $TargetLanguageCodes
 * @property ParallelDataConfig $ParallelDataConfig
 * @property string $Message
 * @property int $ImportedDataSize
 * @property int $ImportedRecordCount
 * @property int $FailedRecordCount
 * @property int $SkippedRecordCount
 * @property EncryptionKey $EncryptionKey
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $LatestUpdateAttemptStatus
 * @property \Aws\Api\DateTimeResult $LatestUpdateAttemptAt
 */
class ParallelDataProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Description?: string,
     *     Status?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     SourceLanguageCode?: string,
     *     TargetLanguageCodes?: list<string>,
     *     ParallelDataConfig?: ParallelDataConfig,
     *     Message?: string,
     *     ImportedDataSize?: int,
     *     ImportedRecordCount?: int,
     *     FailedRecordCount?: int,
     *     SkippedRecordCount?: int,
     *     EncryptionKey?: EncryptionKey,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     LatestUpdateAttemptStatus?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     LatestUpdateAttemptAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
