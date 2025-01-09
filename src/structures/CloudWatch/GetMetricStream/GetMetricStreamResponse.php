<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property list<Shapes\MetricStreamFilter> $IncludeFilters
 * @property list<Shapes\MetricStreamFilter> $ExcludeFilters
 * @property string $FirehoseArn
 * @property string $RoleArn
 * @property string $State
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastUpdateDate
 * @property 'json'|'opentelemetry0.7'|'opentelemetry1.0' $OutputFormat
 * @property list<Shapes\MetricStreamStatisticsConfiguration> $StatisticsConfigurations
 * @property bool $IncludeLinkedAccountsMetrics
 */
class GetMetricStreamResponse extends Response
{
}
