<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAlertManagerDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AlertManagerDefinitionStatus $status
 * @property \Psr\Http\Message\StreamInterface $data
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class AlertManagerDefinitionDescription extends Shape
{
    /**
     * @param array{
     *     status: AlertManagerDefinitionStatus,
     *     data: \Psr\Http\Message\StreamInterface,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
