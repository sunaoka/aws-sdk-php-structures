<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'Failed'|'Successful'|null $status
 * @property string|null $reason
 */
class Cancellation extends Shape
{
    /**
     * @param array{
     *     status?: 'InProgress'|'Failed'|'Successful'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
