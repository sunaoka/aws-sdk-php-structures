<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'active'|'updating'|'deleting'|'deleted'|null $Code
 * @property string|null $Message
 */
class VerifiedAccessEndpointStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending'|'active'|'updating'|'deleting'|'deleted'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
