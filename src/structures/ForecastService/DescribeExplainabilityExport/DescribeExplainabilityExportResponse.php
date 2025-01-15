<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainabilityExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ExplainabilityExportArn
 * @property string|null $ExplainabilityExportName
 * @property string|null $ExplainabilityArn
 * @property Shapes\DataDestination|null $Destination
 * @property string|null $Message
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property string|null $Format
 */
class DescribeExplainabilityExportResponse extends Response
{
}
