<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ExplainabilityArn
 * @property string|null $ExplainabilityName
 * @property string|null $ResourceArn
 * @property Shapes\ExplainabilityConfig|null $ExplainabilityConfig
 * @property bool|null $EnableVisualization
 * @property Shapes\DataSource|null $DataSource
 * @property Shapes\Schema|null $Schema
 * @property string|null $StartDateTime
 * @property string|null $EndDateTime
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property string|null $Message
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class DescribeExplainabilityResponse extends Response
{
}
