<?php

namespace Sunaoka\Aws\Structures\Organizations\ListOrganizationalUnitsForParent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParentId
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListOrganizationalUnitsForParentRequest extends Request
{
    /**
     * @param array{
     *     ParentId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
