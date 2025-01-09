<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatasetImportJobName
 * @property string $DatasetImportJobArn
 * @property string $DatasetArn
 * @property string $TimestampFormat
 * @property string $TimeZone
 * @property bool $UseGeolocationForTimeZone
 * @property string $GeolocationFormat
 * @property Shapes\DataSource $DataSource
 * @property int $EstimatedTimeRemainingInMinutes
 * @property array<string, Shapes\Statistics> $FieldStatistics
 * @property double $DataSize
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property string $Format
 * @property 'FULL'|'INCREMENTAL' $ImportMode
 */
class DescribeDatasetImportJobResponse extends Response
{
}
