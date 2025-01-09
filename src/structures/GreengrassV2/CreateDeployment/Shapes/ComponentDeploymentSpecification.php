<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentVersion
 * @property ComponentConfigurationUpdate $configurationUpdate
 * @property ComponentRunWith $runWith
 */
class ComponentDeploymentSpecification extends Shape
{
    /**
     * @param array{
     *     componentVersion: string,
     *     configurationUpdate?: ComponentConfigurationUpdate,
     *     runWith?: ComponentRunWith
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
