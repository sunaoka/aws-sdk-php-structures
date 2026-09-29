<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomMetadataSchemaConfiguration|null $optionalValue
 */
class UpdatedCustomMetadataSchemaConfiguration extends Shape
{
    /**
     * @param array{optionalValue?: CustomMetadataSchemaConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
