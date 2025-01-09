<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateRateBasedRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $ChangeToken
 * @property list<Shapes\RuleUpdate> $Updates
 * @property int $RateLimit
 */
class UpdateRateBasedRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\RuleUpdate>,
     *     RateLimit: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
