<?php

namespace Sunaoka\Aws\Structures\Organizations\ListChildren;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParentId
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT' $ChildType
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListChildrenRequest extends Request
{
    /**
     * @param array{
     *     ParentId: string,
     *     ChildType: 'ACCOUNT'|'ORGANIZATIONAL_UNIT',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
