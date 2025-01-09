<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeployWorkspaceApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WorkspaceResourceAssociation> $Associations
 */
class WorkSpaceApplicationDeployment extends Shape
{
    /**
     * @param array{Associations?: list<WorkspaceResourceAssociation>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
