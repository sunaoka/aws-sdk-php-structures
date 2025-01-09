<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LakeFormationConfiguration $lakeFormationConfiguration
 */
class ProvisioningConfiguration extends Shape
{
    /**
     * @param array{lakeFormationConfiguration?: LakeFormationConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
