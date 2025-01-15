<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $image
 * @property string $executionRoleArn
 * @property ResourceConfiguration $resourceConfiguration
 * @property list<Variable>|null $variables
 */
class ContainerDatasetAction extends Shape
{
    /**
     * @param array{
     *     image: string,
     *     executionRoleArn: string,
     *     resourceConfiguration: ResourceConfiguration,
     *     variables?: list<Variable>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
