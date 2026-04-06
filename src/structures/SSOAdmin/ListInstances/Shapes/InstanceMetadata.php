<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceArn
 * @property string|null $IdentityStoreId
 */
class InstanceMetadata extends Shape
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     IdentityStoreId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
