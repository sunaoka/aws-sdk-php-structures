<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandbox\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fleetArn
 */
class ProjectFleet extends Shape
{
    /**
     * @param array{fleetArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
