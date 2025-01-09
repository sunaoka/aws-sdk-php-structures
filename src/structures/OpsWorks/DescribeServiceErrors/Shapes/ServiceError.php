<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeServiceErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceErrorId
 * @property string $StackId
 * @property string $InstanceId
 * @property string $Type
 * @property string $Message
 * @property string $CreatedAt
 */
class ServiceError extends Shape
{
    /**
     * @param array{
     *     ServiceErrorId?: string,
     *     StackId?: string,
     *     InstanceId?: string,
     *     Type?: string,
     *     Message?: string,
     *     CreatedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
