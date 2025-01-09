<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKeyRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyArn
 * @property bool $DefaultKey
 */
class RegisteredCustomerManagedKey extends Shape
{
    /**
     * @param array{
     *     KeyArn?: string,
     *     DefaultKey?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
