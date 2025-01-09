<?php

namespace Sunaoka\Aws\Structures\EKS\ListAssociatedAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cluster'|'namespace' $type
 * @property list<string> $namespaces
 */
class AccessScope extends Shape
{
    /**
     * @param array{
     *     type?: 'cluster'|'namespace',
     *     namespaces?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
