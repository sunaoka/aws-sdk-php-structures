<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $ChangeToken
 * @property list<Shapes\RuleUpdate> $Updates
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\RuleUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
