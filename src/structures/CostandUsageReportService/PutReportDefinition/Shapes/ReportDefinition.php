<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\PutReportDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportName
 * @property 'HOURLY'|'DAILY'|'MONTHLY' $TimeUnit
 * @property 'textORcsv'|'Parquet' $Format
 * @property 'ZIP'|'GZIP'|'Parquet' $Compression
 * @property list<'RESOURCES'|'SPLIT_COST_ALLOCATION_DATA'|'MANUAL_DISCOUNT_COMPATIBILITY'> $AdditionalSchemaElements
 * @property string $S3Bucket
 * @property string $S3Prefix
 * @property 'af-south-1'|'ap-east-1'|'ap-south-1'|'ap-south-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'ca-central-1'|'eu-central-1'|'eu-central-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-north-1'|'eu-south-1'|'eu-south-2'|'me-central-1'|'me-south-1'|'sa-east-1'|'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'cn-north-1'|'cn-northwest-1' $S3Region
 * @property list<'REDSHIFT'|'QUICKSIGHT'|'ATHENA'>|null $AdditionalArtifacts
 * @property bool|null $RefreshClosedReports
 * @property 'CREATE_NEW_REPORT'|'OVERWRITE_REPORT'|null $ReportVersioning
 * @property string|null $BillingViewArn
 * @property ReportStatus|null $ReportStatus
 */
class ReportDefinition extends Shape
{
    /**
     * @param array{
     *     ReportName: string,
     *     TimeUnit: 'HOURLY'|'DAILY'|'MONTHLY',
     *     Format: 'textORcsv'|'Parquet',
     *     Compression: 'ZIP'|'GZIP'|'Parquet',
     *     AdditionalSchemaElements: list<'RESOURCES'|'SPLIT_COST_ALLOCATION_DATA'|'MANUAL_DISCOUNT_COMPATIBILITY'>,
     *     S3Bucket: string,
     *     S3Prefix: string,
     *     S3Region: 'af-south-1'|'ap-east-1'|'ap-south-1'|'ap-south-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'ca-central-1'|'eu-central-1'|'eu-central-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-north-1'|'eu-south-1'|'eu-south-2'|'me-central-1'|'me-south-1'|'sa-east-1'|'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'cn-north-1'|'cn-northwest-1',
     *     AdditionalArtifacts?: list<'REDSHIFT'|'QUICKSIGHT'|'ATHENA'>|null,
     *     RefreshClosedReports?: bool|null,
     *     ReportVersioning?: 'CREATE_NEW_REPORT'|'OVERWRITE_REPORT'|null,
     *     BillingViewArn?: string|null,
     *     ReportStatus?: ReportStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
