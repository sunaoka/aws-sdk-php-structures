<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property list<Shapes\MetricStreamFilter>|null $IncludeFilters
 * @property list<Shapes\MetricStreamFilter>|null $ExcludeFilters
 * @property string|null $FirehoseArn
 * @property string|null $RoleArn
 * @property string|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastUpdateDate
 * @property 'json'|'opentelemetry0.7'|'opentelemetry1.0'|null $OutputFormat
 * @property list<Shapes\MetricStreamStatisticsConfiguration>|null $StatisticsConfigurations
 * @property bool|null $IncludeLinkedAccountsMetrics
 */
class GetMetricStreamResponse extends Response
{
}
