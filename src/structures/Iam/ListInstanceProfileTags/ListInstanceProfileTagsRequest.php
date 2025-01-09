<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfileTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListInstanceProfileTagsRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileName: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
