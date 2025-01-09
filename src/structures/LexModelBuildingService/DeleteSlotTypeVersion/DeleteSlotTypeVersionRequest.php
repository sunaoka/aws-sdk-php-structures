<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteSlotTypeVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 */
class DeleteSlotTypeVersionRequest extends Request
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
