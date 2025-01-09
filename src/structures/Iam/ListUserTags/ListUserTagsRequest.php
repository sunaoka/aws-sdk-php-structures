<?php

namespace Sunaoka\Aws\Structures\Iam\ListUserTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $Marker
 * @property int $MaxItems
 */
class ListUserTagsRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
