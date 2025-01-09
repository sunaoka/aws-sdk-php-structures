<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetId
 * @property string $RuleSetName
 * @property list<Shapes\Rule> $Rules
 */
class UpdateRuleSetRequest extends Request
{
    /**
     * @param array{
     *     RuleSetId: string,
     *     RuleSetName?: string,
     *     Rules?: list<Shapes\Rule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
