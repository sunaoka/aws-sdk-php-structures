<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSchedulerConfigId
 * @property int|null $ClusterSchedulerConfigVersion
 */
class DescribeClusterSchedulerConfigRequest extends Request
{
    /**
     * @param array{
     *     ClusterSchedulerConfigId: string,
     *     ClusterSchedulerConfigVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
