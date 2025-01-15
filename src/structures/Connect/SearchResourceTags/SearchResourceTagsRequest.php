<?php

namespace Sunaoka\Aws\Structures\Connect\SearchResourceTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string>|null $ResourceTypes
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ResourceTagsSearchCriteria|null $SearchCriteria
 */
class SearchResourceTagsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceTypes?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchCriteria?: Shapes\ResourceTagsSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
