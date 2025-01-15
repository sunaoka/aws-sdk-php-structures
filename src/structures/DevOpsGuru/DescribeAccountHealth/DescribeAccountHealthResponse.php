<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAccountHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $OpenReactiveInsights
 * @property int $OpenProactiveInsights
 * @property int $MetricsAnalyzed
 * @property int $ResourceHours
 * @property int|null $AnalyzedResourceCount
 */
class DescribeAccountHealthResponse extends Response
{
}
