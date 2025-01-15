<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPrompts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\PromptSearchFilter|null $SearchFilter
 * @property Shapes\PromptSearchCriteria|null $SearchCriteria
 */
class SearchPromptsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\PromptSearchFilter|null,
     *     SearchCriteria?: Shapes\PromptSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
