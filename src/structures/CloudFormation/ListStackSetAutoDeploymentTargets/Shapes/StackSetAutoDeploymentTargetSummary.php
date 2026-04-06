<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetAutoDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationalUnitId
 * @property list<string>|null $Regions
 */
class StackSetAutoDeploymentTargetSummary extends Shape
{
    /**
     * @param array{
     *     OrganizationalUnitId?: string|null,
     *     Regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
