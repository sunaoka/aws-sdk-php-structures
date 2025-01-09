<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSchedulerConfigId
 */
class DeleteClusterSchedulerConfigRequest extends Request
{
    /**
     * @param array{ClusterSchedulerConfigId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
