<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string|null $thingTypeName
 * @property Shapes\AttributePayload|null $attributePayload
 * @property int|null $expectedVersion
 * @property bool|null $removeThingType
 */
class UpdateThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     thingTypeName?: string|null,
     *     attributePayload?: Shapes\AttributePayload|null,
     *     expectedVersion?: int|null,
     *     removeThingType?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
