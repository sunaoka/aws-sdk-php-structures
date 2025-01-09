<?php

namespace Sunaoka\Aws\Structures\Iam\ListPoliciesGrantingServiceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceNamespace
 * @property list<PolicyGrantingServiceAccess> $Policies
 */
class ListPoliciesGrantingServiceAccessEntry extends Shape
{
    /**
     * @param array{
     *     ServiceNamespace?: string,
     *     Policies?: list<PolicyGrantingServiceAccess>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
