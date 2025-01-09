<?php

namespace Sunaoka\Aws\Structures\QApps\CreateLibraryItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property int $appVersion
 * @property list<string> $categories
 */
class CreateLibraryItemRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     appVersion: int,
     *     categories: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
