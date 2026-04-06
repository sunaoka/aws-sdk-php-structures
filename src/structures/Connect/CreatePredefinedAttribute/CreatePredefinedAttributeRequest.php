<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePredefinedAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property Shapes\PredefinedAttributeValues|null $Values
 * @property list<string>|null $Purposes
 * @property Shapes\InputPredefinedAttributeConfiguration|null $AttributeConfiguration
 */
class CreatePredefinedAttributeRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Values?: Shapes\PredefinedAttributeValues|null,
     *     Purposes?: list<string>|null,
     *     AttributeConfiguration?: Shapes\InputPredefinedAttributeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
