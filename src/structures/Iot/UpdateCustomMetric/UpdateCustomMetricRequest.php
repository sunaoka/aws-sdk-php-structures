<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCustomMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property string $displayName
 */
class UpdateCustomMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
