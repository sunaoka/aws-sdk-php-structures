<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleArn
 * @property int|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class UnprocessedAutomationRule extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string|null,
     *     ErrorCode?: int|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
