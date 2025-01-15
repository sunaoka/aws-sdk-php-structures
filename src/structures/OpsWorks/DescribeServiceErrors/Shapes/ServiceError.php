<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeServiceErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceErrorId
 * @property string|null $StackId
 * @property string|null $InstanceId
 * @property string|null $Type
 * @property string|null $Message
 * @property string|null $CreatedAt
 */
class ServiceError extends Shape
{
    /**
     * @param array{
     *     ServiceErrorId?: string|null,
     *     StackId?: string|null,
     *     InstanceId?: string|null,
     *     Type?: string|null,
     *     Message?: string|null,
     *     CreatedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
