<?php

namespace Sunaoka\Aws\Structures\AppRegistry\UpdateAttributeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attributeGroup
 * @property string|null $name
 * @property string|null $description
 * @property string|null $attributes
 */
class UpdateAttributeGroupRequest extends Request
{
    /**
     * @param array{
     *     attributeGroup: string,
     *     name?: string|null,
     *     description?: string|null,
     *     attributes?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
