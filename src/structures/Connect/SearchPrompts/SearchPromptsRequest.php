<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPrompts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\PromptSearchFilter $SearchFilter
 * @property Shapes\PromptSearchCriteria $SearchCriteria
 */
class SearchPromptsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SearchFilter?: Shapes\PromptSearchFilter,
     *     SearchCriteria?: Shapes\PromptSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
