<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\RulesSearchCriteria|null $SearchCriteria
 * @property Shapes\RulesSearchFilter|null $SearchFilter
 */
class SearchRulesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null,
     *     SearchCriteria?: Shapes\RulesSearchCriteria|null,
     *     SearchFilter?: Shapes\RulesSearchFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
