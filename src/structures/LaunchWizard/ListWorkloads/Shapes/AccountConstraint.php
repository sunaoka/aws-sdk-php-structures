<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagementAccountConstraint|null $managementAccount
 * @property DelegatedAdminConstraint|null $delegatedAdmin
 */
class AccountConstraint extends Shape
{
    /**
     * @param array{
     *     managementAccount?: ManagementAccountConstraint|null,
     *     delegatedAdmin?: DelegatedAdminConstraint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
