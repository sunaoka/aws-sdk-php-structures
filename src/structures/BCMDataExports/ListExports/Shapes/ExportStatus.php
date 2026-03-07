<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'UNHEALTHY'|null $StatusCode
 * @property 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $LastRefreshedAt
 */
class ExportStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'HEALTHY'|'UNHEALTHY'|null,
     *     StatusReason?: 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastRefreshedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
