<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdatePatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PatchRule> $PatchRules
 */
class PatchRuleGroup extends Shape
{
    /**
     * @param array{PatchRules: list<PatchRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
