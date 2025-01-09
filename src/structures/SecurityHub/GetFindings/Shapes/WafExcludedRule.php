<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 */
class WafExcludedRule extends Shape
{
    /**
     * @param array{RuleId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
