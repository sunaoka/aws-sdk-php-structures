<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LatestDeploymentId
 */
class DeploymentDetails extends Shape
{
    /**
     * @param array{LatestDeploymentId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
