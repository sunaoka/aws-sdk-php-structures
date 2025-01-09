<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuildBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fleetArn
 */
class ProjectFleet extends Shape
{
    /**
     * @param array{fleetArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
