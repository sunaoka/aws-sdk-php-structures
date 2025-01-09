<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverBlueGreenDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 */
class BlueGreenDeploymentTask extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
