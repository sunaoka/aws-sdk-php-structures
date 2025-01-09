<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExplainabilityArn
 * @property string $ExplainabilityName
 * @property string $ResourceArn
 * @property Shapes\ExplainabilityConfig $ExplainabilityConfig
 * @property bool $EnableVisualization
 * @property Shapes\DataSource $DataSource
 * @property Shapes\Schema $Schema
 * @property string $StartDateTime
 * @property string $EndDateTime
 * @property int $EstimatedTimeRemainingInMinutes
 * @property string $Message
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class DescribeExplainabilityResponse extends Response
{
}
