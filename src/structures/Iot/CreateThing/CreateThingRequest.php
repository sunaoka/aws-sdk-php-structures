<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string|null $thingTypeName
 * @property Shapes\AttributePayload|null $attributePayload
 * @property string|null $billingGroupName
 */
class CreateThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     thingTypeName?: string|null,
     *     attributePayload?: Shapes\AttributePayload|null,
     *     billingGroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
