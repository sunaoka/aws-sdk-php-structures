<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ClusterArn
 * @property Shapes\SchedulerConfig $SchedulerConfig
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateClusterSchedulerConfigRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ClusterArn: string,
     *     SchedulerConfig: Shapes\SchedulerConfig,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
