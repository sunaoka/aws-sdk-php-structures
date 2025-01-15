<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FilterCondition>|null $FilterConditionList
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     FilterConditionList?: list<Shapes\FilterCondition>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
