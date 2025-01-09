<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'active'|'updating'|'deleting'|'deleted' $Code
 * @property string $Message
 */
class VerifiedAccessEndpointStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending'|'active'|'updating'|'deleting'|'deleted',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
