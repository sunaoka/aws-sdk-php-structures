<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateLibraryItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $libraryItemId
 * @property 'PUBLISHED'|'DISABLED' $status
 * @property list<string> $categories
 */
class UpdateLibraryItemRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     libraryItemId: string,
     *     status?: 'PUBLISHED'|'DISABLED',
     *     categories?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
