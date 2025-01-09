<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $RuleSetName
 * @property list<Shapes\Rule> $Rules
 * @property list<Shapes\Tag> $Tags
 */
class CreateRuleSetRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     RuleSetName: string,
     *     Rules: list<Shapes\Rule>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
