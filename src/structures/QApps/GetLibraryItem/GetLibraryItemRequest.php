<?php

namespace Sunaoka\Aws\Structures\QApps\GetLibraryItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $libraryItemId
 * @property string $appId
 */
class GetLibraryItemRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     libraryItemId: string,
     *     appId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
