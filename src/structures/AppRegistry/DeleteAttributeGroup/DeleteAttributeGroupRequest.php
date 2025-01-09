<?php

namespace Sunaoka\Aws\Structures\AppRegistry\DeleteAttributeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attributeGroup
 */
class DeleteAttributeGroupRequest extends Request
{
    /**
     * @param array{attributeGroup: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
