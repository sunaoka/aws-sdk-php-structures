<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<Shapes\MetricStreamFilter> $IncludeFilters
 * @property list<Shapes\MetricStreamFilter> $ExcludeFilters
 * @property string $FirehoseArn
 * @property string $RoleArn
 * @property 'json'|'opentelemetry0.7'|'opentelemetry1.0' $OutputFormat
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\MetricStreamStatisticsConfiguration> $StatisticsConfigurations
 * @property bool $IncludeLinkedAccountsMetrics
 */
class PutMetricStreamRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeFilters?: list<Shapes\MetricStreamFilter>,
     *     ExcludeFilters?: list<Shapes\MetricStreamFilter>,
     *     FirehoseArn: string,
     *     RoleArn: string,
     *     OutputFormat: 'json'|'opentelemetry0.7'|'opentelemetry1.0',
     *     Tags?: list<Shapes\Tag>,
     *     StatisticsConfigurations?: list<Shapes\MetricStreamStatisticsConfiguration>,
     *     IncludeLinkedAccountsMetrics?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
