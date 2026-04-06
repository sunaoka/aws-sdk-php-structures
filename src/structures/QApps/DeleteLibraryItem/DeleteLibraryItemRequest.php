<?php

namespace Sunaoka\Aws\Structures\QApps\DeleteLibraryItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $libraryItemId
 */
class DeleteLibraryItemRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     libraryItemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
