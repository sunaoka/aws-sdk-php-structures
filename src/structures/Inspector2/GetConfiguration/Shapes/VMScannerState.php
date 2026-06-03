<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $activated
 * @property \Aws\Api\DateTimeResult|null $activatedAt
 * @property 'SUCCESS'|'PENDING'|'FAILED'|null $status
 */
class VMScannerState extends Shape
{
    /**
     * @param array{
     *     activated?: bool|null,
     *     activatedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'SUCCESS'|'PENDING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
