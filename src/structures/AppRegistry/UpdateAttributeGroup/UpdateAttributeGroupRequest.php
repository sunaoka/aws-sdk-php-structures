<?php

namespace Sunaoka\Aws\Structures\AppRegistry\UpdateAttributeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attributeGroup
 * @property string $name
 * @property string $description
 * @property string $attributes
 */
class UpdateAttributeGroupRequest extends Request
{
    /**
     * @param array{
     *     attributeGroup: string,
     *     name?: string,
     *     description?: string,
     *     attributes?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
