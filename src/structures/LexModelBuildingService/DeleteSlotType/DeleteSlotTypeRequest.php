<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteSlotTypeRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
