<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RegistryMapping>|null $registryMappings
 * @property list<ImageMapping>|null $imageMappings
 */
class ContainerRegistryMap extends Shape
{
    /**
     * @param array{
     *     registryMappings?: list<RegistryMapping>|null,
     *     imageMappings?: list<ImageMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
