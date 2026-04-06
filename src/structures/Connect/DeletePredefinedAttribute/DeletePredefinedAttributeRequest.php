<?php

namespace Sunaoka\Aws\Structures\Connect\DeletePredefinedAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 */
class DeletePredefinedAttributeRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
