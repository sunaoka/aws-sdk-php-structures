<?php

namespace Sunaoka\Aws\Structures\Neptune\StartDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $Status
 * @property string $FeatureName
 */
class DBClusterRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     Status?: string,
     *     FeatureName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
