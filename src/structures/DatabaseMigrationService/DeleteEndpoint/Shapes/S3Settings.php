<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceAccessRoleArn
 * @property string $ExternalTableDefinition
 * @property string $CsvRowDelimiter
 * @property string $CsvDelimiter
 * @property string $BucketFolder
 * @property string $BucketName
 * @property 'none'|'gzip' $CompressionType
 * @property 'sse-s3'|'sse-kms' $EncryptionMode
 * @property string $ServerSideEncryptionKmsKeyId
 * @property 'csv'|'parquet' $DataFormat
 * @property 'plain'|'plain-dictionary'|'rle-dictionary' $EncodingType
 * @property int $DictPageSizeLimit
 * @property int $RowGroupLength
 * @property int $DataPageSize
 * @property 'parquet-1-0'|'parquet-2-0' $ParquetVersion
 * @property bool $EnableStatistics
 * @property bool $IncludeOpForFullLoad
 * @property bool $CdcInsertsOnly
 * @property string $TimestampColumnName
 * @property bool $ParquetTimestampInMillisecond
 * @property bool $CdcInsertsAndUpdates
 * @property bool $DatePartitionEnabled
 * @property 'YYYYMMDD'|'YYYYMMDDHH'|'YYYYMM'|'MMYYYYDD'|'DDMMYYYY' $DatePartitionSequence
 * @property 'SLASH'|'UNDERSCORE'|'DASH'|'NONE' $DatePartitionDelimiter
 * @property bool $UseCsvNoSupValue
 * @property string $CsvNoSupValue
 * @property bool $PreserveTransactions
 * @property string $CdcPath
 * @property bool $UseTaskStartTimeForFullLoadTimestamp
 * @property 'none'|'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control' $CannedAclForObjects
 * @property bool $AddColumnName
 * @property int $CdcMaxBatchInterval
 * @property int $CdcMinFileSize
 * @property string $CsvNullValue
 * @property int $IgnoreHeaderRows
 * @property int $MaxFileSize
 * @property bool $Rfc4180
 * @property string $DatePartitionTimezone
 * @property bool $AddTrailingPaddingCharacter
 * @property string $ExpectedBucketOwner
 * @property bool $GlueCatalogGeneration
 */
class S3Settings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn?: string,
     *     ExternalTableDefinition?: string,
     *     CsvRowDelimiter?: string,
     *     CsvDelimiter?: string,
     *     BucketFolder?: string,
     *     BucketName?: string,
     *     CompressionType?: 'none'|'gzip',
     *     EncryptionMode?: 'sse-s3'|'sse-kms',
     *     ServerSideEncryptionKmsKeyId?: string,
     *     DataFormat?: 'csv'|'parquet',
     *     EncodingType?: 'plain'|'plain-dictionary'|'rle-dictionary',
     *     DictPageSizeLimit?: int,
     *     RowGroupLength?: int,
     *     DataPageSize?: int,
     *     ParquetVersion?: 'parquet-1-0'|'parquet-2-0',
     *     EnableStatistics?: bool,
     *     IncludeOpForFullLoad?: bool,
     *     CdcInsertsOnly?: bool,
     *     TimestampColumnName?: string,
     *     ParquetTimestampInMillisecond?: bool,
     *     CdcInsertsAndUpdates?: bool,
     *     DatePartitionEnabled?: bool,
     *     DatePartitionSequence?: 'YYYYMMDD'|'YYYYMMDDHH'|'YYYYMM'|'MMYYYYDD'|'DDMMYYYY',
     *     DatePartitionDelimiter?: 'SLASH'|'UNDERSCORE'|'DASH'|'NONE',
     *     UseCsvNoSupValue?: bool,
     *     CsvNoSupValue?: string,
     *     PreserveTransactions?: bool,
     *     CdcPath?: string,
     *     UseTaskStartTimeForFullLoadTimestamp?: bool,
     *     CannedAclForObjects?: 'none'|'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control',
     *     AddColumnName?: bool,
     *     CdcMaxBatchInterval?: int,
     *     CdcMinFileSize?: int,
     *     CsvNullValue?: string,
     *     IgnoreHeaderRows?: int,
     *     MaxFileSize?: int,
     *     Rfc4180?: bool,
     *     DatePartitionTimezone?: string,
     *     AddTrailingPaddingCharacter?: bool,
     *     ExpectedBucketOwner?: string,
     *     GlueCatalogGeneration?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
