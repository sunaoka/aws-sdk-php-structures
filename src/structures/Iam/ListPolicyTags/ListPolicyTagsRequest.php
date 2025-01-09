<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicyTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListPolicyTagsRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
