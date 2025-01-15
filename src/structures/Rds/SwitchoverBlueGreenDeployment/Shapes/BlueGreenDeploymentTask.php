<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverBlueGreenDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Status
 */
class BlueGreenDeploymentTask extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
