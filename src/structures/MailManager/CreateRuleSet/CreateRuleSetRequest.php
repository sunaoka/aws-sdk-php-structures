<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $RuleSetName
 * @property list<Shapes\Rule> $Rules
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRuleSetRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     RuleSetName: string,
     *     Rules: list<Shapes\Rule>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
