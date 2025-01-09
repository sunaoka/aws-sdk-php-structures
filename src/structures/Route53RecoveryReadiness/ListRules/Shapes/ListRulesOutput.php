<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string $RuleDescription
 * @property string $RuleId
 */
class ListRulesOutput extends Shape
{
    /**
     * @param array{
     *     ResourceType: string,
     *     RuleDescription: string,
     *     RuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
