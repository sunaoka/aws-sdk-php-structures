<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ListAccountLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'LINKED'|'LINKING_FAILED'|'LINK_NOT_FOUND'|'PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'|'REJECTED'> $LinkStatusFilter
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 */
class ListAccountLinksRequest extends Request
{
    /**
     * @param array{
     *     LinkStatusFilter?: list<'LINKED'|'LINKING_FAILED'|'LINK_NOT_FOUND'|'PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'|'REJECTED'>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
