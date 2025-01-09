<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAlertManagerDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $data
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property AlertManagerDefinitionStatus $status
 */
class AlertManagerDefinitionDescription extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     data: string,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     status: AlertManagerDefinitionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
