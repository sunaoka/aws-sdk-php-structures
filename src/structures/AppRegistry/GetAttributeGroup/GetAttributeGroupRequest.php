<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAttributeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attributeGroup
 */
class GetAttributeGroupRequest extends Request
{
    /**
     * @param array{attributeGroup: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
