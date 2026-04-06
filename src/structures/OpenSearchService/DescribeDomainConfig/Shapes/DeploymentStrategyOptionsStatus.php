<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

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
