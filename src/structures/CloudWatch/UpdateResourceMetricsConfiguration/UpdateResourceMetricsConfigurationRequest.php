<?php

namespace Sunaoka\Aws\Structures\CloudWatch\UpdateResourceMetricsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\ResourceMetricSelection>|null $MetricSelections
 */
class UpdateResourceMetricsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     MetricSelections?: list<Shapes\ResourceMetricSelection>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
