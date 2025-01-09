<?php

namespace Sunaoka\Aws\Structures\AppRegistry\DisassociateAttributeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $attributeGroup
 */
class DisassociateAttributeGroupRequest extends Request
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
