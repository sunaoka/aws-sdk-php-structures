<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterEcsCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EcsClusterArn
 * @property string $StackId
 */
class RegisterEcsClusterRequest extends Request
{
    /**
     * @param array{
     *     EcsClusterArn: string,
     *     StackId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
