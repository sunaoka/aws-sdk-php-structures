<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DatasetImportJobName
 * @property string|null $DatasetImportJobArn
 * @property string|null $DatasetArn
 * @property string|null $TimestampFormat
 * @property string|null $TimeZone
 * @property bool|null $UseGeolocationForTimeZone
 * @property string|null $GeolocationFormat
 * @property Shapes\DataSource|null $DataSource
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property array<string, Shapes\Statistics>|null $FieldStatistics
 * @property double|null $DataSize
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property string|null $Format
 * @property 'FULL'|'INCREMENTAL'|null $ImportMode
 */
class DescribeDatasetImportJobResponse extends Response
{
}
