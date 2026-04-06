<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceResourceId|null $serviceResourceId
 * @property int|null $startedAt
 * @property int|null $stoppedAt
 * @property string|null $statusReason
 */
class ServiceJobAttemptDetail extends Shape
{
    /**
     * @param array{
     *     serviceResourceId?: ServiceResourceId|null,
     *     startedAt?: int|null,
     *     stoppedAt?: int|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
