<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $thingTypeName
 * @property Shapes\AttributePayload $attributePayload
 * @property string $billingGroupName
 */
class CreateThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     thingTypeName?: string,
     *     attributePayload?: Shapes\AttributePayload,
     *     billingGroupName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
