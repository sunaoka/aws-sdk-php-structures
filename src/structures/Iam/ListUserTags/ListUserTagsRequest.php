<?php

namespace Sunaoka\Aws\Structures\Iam\ListUserTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListUserTagsRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
