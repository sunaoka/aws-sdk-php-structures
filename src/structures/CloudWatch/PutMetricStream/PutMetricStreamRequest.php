<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<Shapes\MetricStreamFilter>|null $IncludeFilters
 * @property list<Shapes\MetricStreamFilter>|null $ExcludeFilters
 * @property string $FirehoseArn
 * @property string $RoleArn
 * @property 'json'|'opentelemetry0.7'|'opentelemetry1.0' $OutputFormat
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\MetricStreamStatisticsConfiguration>|null $StatisticsConfigurations
 * @property bool|null $IncludeLinkedAccountsMetrics
 */
class PutMetricStreamRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeFilters?: list<Shapes\MetricStreamFilter>|null,
     *     ExcludeFilters?: list<Shapes\MetricStreamFilter>|null,
     *     FirehoseArn: string,
     *     RoleArn: string,
     *     OutputFormat: 'json'|'opentelemetry0.7'|'opentelemetry1.0',
     *     Tags?: list<Shapes\Tag>|null,
     *     StatisticsConfigurations?: list<Shapes\MetricStreamStatisticsConfiguration>|null,
     *     IncludeLinkedAccountsMetrics?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
