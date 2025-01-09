<?php

namespace Sunaoka\Aws\Structures\AppRegistry\AssociateAttributeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $attributeGroup
 */
class AssociateAttributeGroupRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     attributeGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
