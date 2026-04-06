<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LakeFormationConfiguration|null $lakeFormationConfiguration
 */
class ProvisioningConfiguration extends Shape
{
    /**
     * @param array{lakeFormationConfiguration?: LakeFormationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
