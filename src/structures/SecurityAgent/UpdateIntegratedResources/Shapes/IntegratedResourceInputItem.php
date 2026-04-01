<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntegratedResource $resource
 * @property ProviderResourceCapabilities|null $capabilities
 */
class IntegratedResourceInputItem extends Shape
{
    /**
     * @param array{
     *     resource: IntegratedResource,
     *     capabilities?: ProviderResourceCapabilities|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
