<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeploymentStrategyOptions $Options
 * @property OptionStatus $Status
 */
class DeploymentStrategyOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: DeploymentStrategyOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
