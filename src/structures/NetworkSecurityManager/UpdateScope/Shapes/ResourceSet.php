<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $explicitArns
 * @property ResourceLogicalExpression|null $expression
 */
class ResourceSet extends Shape
{
    /**
     * @param array{
     *     explicitArns?: list<string>|null,
     *     expression?: ResourceLogicalExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
