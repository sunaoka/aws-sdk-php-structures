<?php

namespace Sunaoka\Aws\Structures\Iot\DeprecateThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 * @property bool|null $undoDeprecate
 */
class DeprecateThingTypeRequest extends Request
{
    /**
     * @param array{
     *     thingTypeName: string,
     *     undoDeprecate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
