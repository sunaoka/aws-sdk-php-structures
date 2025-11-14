<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AdminUsers
 * @property array<string, string>|null $Arguments
 * @property list<string>|null $AssignedGroupPatterns
 * @property list<RoleGroupAssignment>|null $RoleGroupAssignments
 */
class PartnerAppConfig extends Shape
{
    /**
     * @param array{
     *     AdminUsers?: list<string>|null,
     *     Arguments?: array<string, string>|null,
     *     AssignedGroupPatterns?: list<string>|null,
     *     RoleGroupAssignments?: list<RoleGroupAssignment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
