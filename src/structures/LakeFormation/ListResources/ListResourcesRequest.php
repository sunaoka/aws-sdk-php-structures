<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FilterCondition> $FilterConditionList
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     FilterConditionList?: list<Shapes\FilterCondition>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
