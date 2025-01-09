<?php

namespace Sunaoka\Aws\Structures\Organizations\ListParents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChildId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListParentsRequest extends Request
{
    /**
     * @param array{
     *     ChildId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
