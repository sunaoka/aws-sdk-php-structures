<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKeyRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyArn
 * @property bool|null $DefaultKey
 */
class RegisteredCustomerManagedKey extends Shape
{
    /**
     * @param array{
     *     KeyArn?: string|null,
     *     DefaultKey?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
