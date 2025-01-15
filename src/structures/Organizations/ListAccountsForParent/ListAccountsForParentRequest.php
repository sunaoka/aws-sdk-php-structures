<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAccountsForParent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParentId
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListAccountsForParentRequest extends Request
{
    /**
     * @param array{
     *     ParentId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
