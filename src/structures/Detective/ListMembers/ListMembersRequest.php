<?php

namespace Sunaoka\Aws\Structures\Detective\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $NextToken
 * @property int<1, 200> $MaxResults
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
