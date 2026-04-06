<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateLibraryItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $libraryItemId
 * @property 'PUBLISHED'|'DISABLED'|null $status
 * @property list<string>|null $categories
 */
class UpdateLibraryItemRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     libraryItemId: string,
     *     status?: 'PUBLISHED'|'DISABLED'|null,
     *     categories?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
