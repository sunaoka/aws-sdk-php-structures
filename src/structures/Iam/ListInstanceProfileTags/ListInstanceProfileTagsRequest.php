<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfileTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListInstanceProfileTagsRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
