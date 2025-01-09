<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTimeSeries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string $alias
 * @property string $timeSeriesId
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string $dataTypeSpec
 * @property \Aws\Api\DateTimeResult $timeSeriesCreationDate
 * @property \Aws\Api\DateTimeResult $timeSeriesLastUpdateDate
 * @property string $timeSeriesArn
 */
class DescribeTimeSeriesResponse extends Response
{
}
