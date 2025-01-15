<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Pending
 * @property int|null $InProgress
 * @property int|null $Succeeded
 * @property int|null $Failed
 * @property int|null $Skipped
 * @property int|null $Ready
 */
class DeploymentOverview extends Shape
{
    /**
     * @param array{
     *     Pending?: int|null,
     *     InProgress?: int|null,
     *     Succeeded?: int|null,
     *     Failed?: int|null,
     *     Skipped?: int|null,
     *     Ready?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
