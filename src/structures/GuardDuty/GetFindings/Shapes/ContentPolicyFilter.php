<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROMPT_ATTACK'|'JAILBREAK'|'HATE'|'INSULTS'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|null $Type
 * @property 'HIGH'|'MEDIUM'|'LOW'|'NONE'|null $Confidence
 * @property 'BLOCKED'|'NONE'|null $Action
 */
class ContentPolicyFilter extends Shape
{
    /**
     * @param array{
     *     Type?: 'PROMPT_ATTACK'|'JAILBREAK'|'HATE'|'INSULTS'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|null,
     *     Confidence?: 'HIGH'|'MEDIUM'|'LOW'|'NONE'|null,
     *     Action?: 'BLOCKED'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
