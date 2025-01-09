<?php

namespace Sunaoka\Aws\Structures\Shield\ListResourcesInProtectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionGroupId
 * @property string $NextToken
 * @property int<0, 10000> $MaxResults
 */
class ListResourcesInProtectionGroupRequest extends Request
{
    /**
     * @param array{
     *     ProtectionGroupId: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
