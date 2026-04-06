<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetId
 * @property string|null $RuleSetName
 * @property list<Shapes\Rule>|null $Rules
 */
class UpdateRuleSetRequest extends Request
{
    /**
     * @param array{
     *     RuleSetId: string,
     *     RuleSetName?: string|null,
     *     Rules?: list<Shapes\Rule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
