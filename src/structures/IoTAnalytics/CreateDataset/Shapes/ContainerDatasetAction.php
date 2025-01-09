<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $image
 * @property string $executionRoleArn
 * @property ResourceConfiguration $resourceConfiguration
 * @property list<Variable> $variables
 */
class ContainerDatasetAction extends Shape
{
    /**
     * @param array{
     *     image: string,
     *     executionRoleArn: string,
     *     resourceConfiguration: ResourceConfiguration,
     *     variables?: list<Variable>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
