<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetAutoDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationalUnitId
 * @property list<string> $Regions
 */
class StackSetAutoDeploymentTargetSummary extends Shape
{
    /**
     * @param array{
     *     OrganizationalUnitId?: string,
     *     Regions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
