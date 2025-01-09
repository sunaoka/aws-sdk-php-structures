<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pending
 * @property int $InProgress
 * @property int $Succeeded
 * @property int $Failed
 * @property int $Skipped
 * @property int $Ready
 */
class DeploymentOverview extends Shape
{
    /**
     * @param array{
     *     Pending?: int,
     *     InProgress?: int,
     *     Succeeded?: int,
     *     Failed?: int,
     *     Skipped?: int,
     *     Ready?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
