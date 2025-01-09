<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainabilityExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExplainabilityExportArn
 * @property string $ExplainabilityExportName
 * @property string $ExplainabilityArn
 * @property Shapes\DataDestination $Destination
 * @property string $Message
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property string $Format
 */
class DescribeExplainabilityExportResponse extends Response
{
}
