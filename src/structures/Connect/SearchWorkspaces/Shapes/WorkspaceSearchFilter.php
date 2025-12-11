<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneAttributeFilter|null $AttributeFilter
 */
class WorkspaceSearchFilter extends Shape
{
    /**
     * @param array{AttributeFilter?: ControlPlaneAttributeFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
