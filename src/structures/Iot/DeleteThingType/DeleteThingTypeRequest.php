<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 */
class DeleteThingTypeRequest extends Request
{
    /**
     * @param array{thingTypeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
