<?php

namespace Sunaoka\Aws\Structures\Organizations\ListParents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChildId
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListParentsRequest extends Request
{
    /**
     * @param array{
     *     ChildId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
