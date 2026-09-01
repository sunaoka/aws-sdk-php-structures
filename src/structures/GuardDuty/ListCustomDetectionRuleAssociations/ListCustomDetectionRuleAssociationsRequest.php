<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRuleAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $RuleId
 * @property 'LIVE'|'DRY_RUN'|null $Mode
 */
class ListCustomDetectionRuleAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     RuleId?: string|null,
     *     Mode?: 'LIVE'|'DRY_RUN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
