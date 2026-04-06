<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAlertManagerDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Psr\Http\Message\StreamInterface $data
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property AlertManagerDefinitionStatus $status
 */
class AlertManagerDefinitionDescription extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     data: \Psr\Http\Message\StreamInterface,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     status: AlertManagerDefinitionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
