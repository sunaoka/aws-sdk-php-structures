<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAccountsForParent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParentId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAccountsForParentRequest extends Request
{
    /**
     * @param array{
     *     ParentId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
