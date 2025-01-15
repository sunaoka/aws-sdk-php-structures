<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTimeSeries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $alias
 * @property string $timeSeriesId
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $dataTypeSpec
 * @property \Aws\Api\DateTimeResult $timeSeriesCreationDate
 * @property \Aws\Api\DateTimeResult $timeSeriesLastUpdateDate
 * @property string $timeSeriesArn
 */
class DescribeTimeSeriesResponse extends Response
{
}
