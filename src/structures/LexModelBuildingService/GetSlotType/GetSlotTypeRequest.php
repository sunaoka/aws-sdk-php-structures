<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 */
class GetSlotTypeRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
