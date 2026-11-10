<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpgradeElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ClonedBlueGreen' $DeploymentStrategy
 * @property ClonedBlueGreenOptions|null $ClonedBlueGreenOptions
 */
class DeploymentStrategyOverrideOptions extends Shape
{
    /**
     * @param array{
     *     DeploymentStrategy: 'ClonedBlueGreen',
     *     ClonedBlueGreenOptions?: ClonedBlueGreenOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
