<?php

namespace Sunaoka\Aws\Structures\QApps\CreateLibraryItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property int<0, 2147483647> $appVersion
 * @property list<string> $categories
 */
class CreateLibraryItemRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     appVersion: int<0, 2147483647>,
     *     categories: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
