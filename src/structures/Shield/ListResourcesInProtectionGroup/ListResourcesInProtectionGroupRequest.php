<?php

namespace Sunaoka\Aws\Structures\Shield\ListResourcesInProtectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionGroupId
 * @property string|null $NextToken
 * @property int<0, 10000>|null $MaxResults
 */
class ListResourcesInProtectionGroupRequest extends Request
{
    /**
     * @param array{
     *     ProtectionGroupId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
