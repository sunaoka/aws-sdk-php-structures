<?php

namespace Sunaoka\Aws\Structures\Iam\ListPoliciesGrantingServiceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceNamespace
 * @property list<PolicyGrantingServiceAccess>|null $Policies
 */
class ListPoliciesGrantingServiceAccessEntry extends Shape
{
    /**
     * @param array{
     *     ServiceNamespace?: string|null,
     *     Policies?: list<PolicyGrantingServiceAccess>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
