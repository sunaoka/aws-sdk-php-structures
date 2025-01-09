<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LatestDeploymentId
 */
class DeploymentDetails extends Shape
{
    /**
     * @param array{LatestDeploymentId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
