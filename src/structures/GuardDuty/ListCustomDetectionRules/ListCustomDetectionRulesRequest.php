<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\DetectionRuleFilter>|null $Filters
 */
class ListCustomDetectionRulesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\DetectionRuleFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
