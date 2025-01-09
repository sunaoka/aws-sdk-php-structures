<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\Rule> $Rules
 */
class UpdateRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Rules: list<Shapes\Rule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
