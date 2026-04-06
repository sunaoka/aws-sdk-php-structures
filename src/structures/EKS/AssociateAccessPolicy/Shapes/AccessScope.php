<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cluster'|'namespace'|null $type
 * @property list<string>|null $namespaces
 */
class AccessScope extends Shape
{
    /**
     * @param array{
     *     type?: 'cluster'|'namespace'|null,
     *     namespaces?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
