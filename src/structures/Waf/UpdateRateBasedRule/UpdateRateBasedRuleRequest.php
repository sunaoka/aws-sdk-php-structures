<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateRateBasedRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $ChangeToken
 * @property list<Shapes\RuleUpdate> $Updates
 * @property int<100, 2000000000> $RateLimit
 */
class UpdateRateBasedRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\RuleUpdate>,
     *     RateLimit: int<100, 2000000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
