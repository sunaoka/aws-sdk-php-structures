<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastRefreshedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'HEALTHY'|'UNHEALTHY' $StatusCode
 * @property 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE' $StatusReason
 */
class ExportStatus extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastRefreshedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     StatusCode?: 'HEALTHY'|'UNHEALTHY',
     *     StatusReason?: 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
