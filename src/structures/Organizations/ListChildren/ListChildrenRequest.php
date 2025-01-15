<?php

namespace Sunaoka\Aws\Structures\Organizations\ListChildren;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParentId
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT' $ChildType
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListChildrenRequest extends Request
{
    /**
     * @param array{
     *     ParentId: string,
     *     ChildType: 'ACCOUNT'|'ORGANIZATIONAL_UNIT',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
