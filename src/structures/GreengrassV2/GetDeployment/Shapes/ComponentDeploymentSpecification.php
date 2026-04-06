<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentVersion
 * @property ComponentConfigurationUpdate|null $configurationUpdate
 * @property ComponentRunWith|null $runWith
 */
class ComponentDeploymentSpecification extends Shape
{
    /**
     * @param array{
     *     componentVersion?: string|null,
     *     configurationUpdate?: ComponentConfigurationUpdate|null,
     *     runWith?: ComponentRunWith|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
