<?php

namespace Sunaoka\Aws\Structures\Organizations\ListParents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChildId
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListParentsRequest extends Request
{
    /**
     * @param array{
     *     ChildId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
