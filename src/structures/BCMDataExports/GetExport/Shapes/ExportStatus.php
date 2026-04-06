<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastRefreshedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'HEALTHY'|'UNHEALTHY'|null $StatusCode
 * @property 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'|null $StatusReason
 */
class ExportStatus extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastRefreshedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     StatusCode?: 'HEALTHY'|'UNHEALTHY'|null,
     *     StatusReason?: 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
