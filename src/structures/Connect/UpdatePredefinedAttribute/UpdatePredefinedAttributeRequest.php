<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePredefinedAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property Shapes\PredefinedAttributeValues $Values
 */
class UpdatePredefinedAttributeRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Values?: Shapes\PredefinedAttributeValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
