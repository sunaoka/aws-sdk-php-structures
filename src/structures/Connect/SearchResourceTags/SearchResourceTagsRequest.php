<?php

namespace Sunaoka\Aws\Structures\Connect\SearchResourceTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string> $ResourceTypes
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\ResourceTagsSearchCriteria $SearchCriteria
 */
class SearchResourceTagsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceTypes?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SearchCriteria?: Shapes\ResourceTagsSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
