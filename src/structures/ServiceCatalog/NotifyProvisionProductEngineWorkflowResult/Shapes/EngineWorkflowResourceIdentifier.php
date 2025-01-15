<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\NotifyProvisionProductEngineWorkflowResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UniqueTagResourceIdentifier|null $UniqueTag
 */
class EngineWorkflowResourceIdentifier extends Shape
{
    /**
     * @param array{UniqueTag?: UniqueTagResourceIdentifier|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
