<?php

namespace Sunaoka\Aws\Structures\Iot\DeprecateThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 * @property bool $undoDeprecate
 */
class DeprecateThingTypeRequest extends Request
{
    /**
     * @param array{
     *     thingTypeName: string,
     *     undoDeprecate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
