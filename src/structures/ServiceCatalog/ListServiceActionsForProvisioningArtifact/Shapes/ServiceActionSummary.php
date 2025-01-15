<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListServiceActionsForProvisioningArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'SSM_AUTOMATION'|null $DefinitionType
 */
class ServiceActionSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     DefinitionType?: 'SSM_AUTOMATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
