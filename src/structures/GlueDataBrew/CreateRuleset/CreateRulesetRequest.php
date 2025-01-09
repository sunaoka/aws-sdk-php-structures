<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $TargetArn
 * @property list<Shapes\Rule> $Rules
 * @property array<string, string> $Tags
 */
class CreateRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     TargetArn: string,
     *     Rules: list<Shapes\Rule>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
