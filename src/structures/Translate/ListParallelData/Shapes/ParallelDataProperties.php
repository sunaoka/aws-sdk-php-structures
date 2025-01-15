<?php

namespace Sunaoka\Aws\Structures\Translate\ListParallelData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Description
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property string|null $SourceLanguageCode
 * @property list<string>|null $TargetLanguageCodes
 * @property ParallelDataConfig|null $ParallelDataConfig
 * @property string|null $Message
 * @property int|null $ImportedDataSize
 * @property int|null $ImportedRecordCount
 * @property int|null $FailedRecordCount
 * @property int|null $SkippedRecordCount
 * @property EncryptionKey|null $EncryptionKey
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $LatestUpdateAttemptStatus
 * @property \Aws\Api\DateTimeResult|null $LatestUpdateAttemptAt
 */
class ParallelDataProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Description?: string|null,
     *     Status?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     SourceLanguageCode?: string|null,
     *     TargetLanguageCodes?: list<string>|null,
     *     ParallelDataConfig?: ParallelDataConfig|null,
     *     Message?: string|null,
     *     ImportedDataSize?: int|null,
     *     ImportedRecordCount?: int|null,
     *     FailedRecordCount?: int|null,
     *     SkippedRecordCount?: int|null,
     *     EncryptionKey?: EncryptionKey|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     LatestUpdateAttemptStatus?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     LatestUpdateAttemptAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
