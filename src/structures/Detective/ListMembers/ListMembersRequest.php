<?php

namespace Sunaoka\Aws\Structures\Detective\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string|null $NextToken
 * @property int<1, 200>|null $MaxResults
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
