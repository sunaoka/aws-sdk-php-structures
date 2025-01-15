<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceAccessRoleArn
 * @property string|null $ExternalTableDefinition
 * @property string|null $CsvRowDelimiter
 * @property string|null $CsvDelimiter
 * @property string|null $BucketFolder
 * @property string|null $BucketName
 * @property 'none'|'gzip'|null $CompressionType
 * @property 'sse-s3'|'sse-kms'|null $EncryptionMode
 * @property string|null $ServerSideEncryptionKmsKeyId
 * @property 'csv'|'parquet'|null $DataFormat
 * @property 'plain'|'plain-dictionary'|'rle-dictionary'|null $EncodingType
 * @property int|null $DictPageSizeLimit
 * @property int|null $RowGroupLength
 * @property int|null $DataPageSize
 * @property 'parquet-1-0'|'parquet-2-0'|null $ParquetVersion
 * @property bool|null $EnableStatistics
 * @property bool|null $IncludeOpForFullLoad
 * @property bool|null $CdcInsertsOnly
 * @property string|null $TimestampColumnName
 * @property bool|null $ParquetTimestampInMillisecond
 * @property bool|null $CdcInsertsAndUpdates
 * @property bool|null $DatePartitionEnabled
 * @property 'YYYYMMDD'|'YYYYMMDDHH'|'YYYYMM'|'MMYYYYDD'|'DDMMYYYY'|null $DatePartitionSequence
 * @property 'SLASH'|'UNDERSCORE'|'DASH'|'NONE'|null $DatePartitionDelimiter
 * @property bool|null $UseCsvNoSupValue
 * @property string|null $CsvNoSupValue
 * @property bool|null $PreserveTransactions
 * @property string|null $CdcPath
 * @property bool|null $UseTaskStartTimeForFullLoadTimestamp
 * @property 'none'|'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $CannedAclForObjects
 * @property bool|null $AddColumnName
 * @property int|null $CdcMaxBatchInterval
 * @property int|null $CdcMinFileSize
 * @property string|null $CsvNullValue
 * @property int|null $IgnoreHeaderRows
 * @property int|null $MaxFileSize
 * @property bool|null $Rfc4180
 * @property string|null $DatePartitionTimezone
 * @property bool|null $AddTrailingPaddingCharacter
 * @property string|null $ExpectedBucketOwner
 * @property bool|null $GlueCatalogGeneration
 */
class S3Settings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn?: string|null,
     *     ExternalTableDefinition?: string|null,
     *     CsvRowDelimiter?: string|null,
     *     CsvDelimiter?: string|null,
     *     BucketFolder?: string|null,
     *     BucketName?: string|null,
     *     CompressionType?: 'none'|'gzip'|null,
     *     EncryptionMode?: 'sse-s3'|'sse-kms'|null,
     *     ServerSideEncryptionKmsKeyId?: string|null,
     *     DataFormat?: 'csv'|'parquet'|null,
     *     EncodingType?: 'plain'|'plain-dictionary'|'rle-dictionary'|null,
     *     DictPageSizeLimit?: int|null,
     *     RowGroupLength?: int|null,
     *     DataPageSize?: int|null,
     *     ParquetVersion?: 'parquet-1-0'|'parquet-2-0'|null,
     *     EnableStatistics?: bool|null,
     *     IncludeOpForFullLoad?: bool|null,
     *     CdcInsertsOnly?: bool|null,
     *     TimestampColumnName?: string|null,
     *     ParquetTimestampInMillisecond?: bool|null,
     *     CdcInsertsAndUpdates?: bool|null,
     *     DatePartitionEnabled?: bool|null,
     *     DatePartitionSequence?: 'YYYYMMDD'|'YYYYMMDDHH'|'YYYYMM'|'MMYYYYDD'|'DDMMYYYY'|null,
     *     DatePartitionDelimiter?: 'SLASH'|'UNDERSCORE'|'DASH'|'NONE'|null,
     *     UseCsvNoSupValue?: bool|null,
     *     CsvNoSupValue?: string|null,
     *     PreserveTransactions?: bool|null,
     *     CdcPath?: string|null,
     *     UseTaskStartTimeForFullLoadTimestamp?: bool|null,
     *     CannedAclForObjects?: 'none'|'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     AddColumnName?: bool|null,
     *     CdcMaxBatchInterval?: int|null,
     *     CdcMinFileSize?: int|null,
     *     CsvNullValue?: string|null,
     *     IgnoreHeaderRows?: int|null,
     *     MaxFileSize?: int|null,
     *     Rfc4180?: bool|null,
     *     DatePartitionTimezone?: string|null,
     *     AddTrailingPaddingCharacter?: bool|null,
     *     ExpectedBucketOwner?: string|null,
     *     GlueCatalogGeneration?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
