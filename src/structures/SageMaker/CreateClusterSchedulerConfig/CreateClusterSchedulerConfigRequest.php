<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ClusterArn
 * @property Shapes\SchedulerConfig $SchedulerConfig
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateClusterSchedulerConfigRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ClusterArn: string,
     *     SchedulerConfig: Shapes\SchedulerConfig,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
