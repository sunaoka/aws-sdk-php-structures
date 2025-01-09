<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $thingTypeName
 * @property Shapes\AttributePayload $attributePayload
 * @property int $expectedVersion
 * @property bool $removeThingType
 */
class UpdateThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     thingTypeName?: string,
     *     attributePayload?: Shapes\AttributePayload,
     *     expectedVersion?: int,
     *     removeThingType?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
