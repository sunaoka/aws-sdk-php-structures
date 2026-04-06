<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $anomalyDetectorId
 */
class DescribeAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     anomalyDetectorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
