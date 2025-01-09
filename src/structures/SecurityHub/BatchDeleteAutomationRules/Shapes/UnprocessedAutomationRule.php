<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchDeleteAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleArn
 * @property int $ErrorCode
 * @property string $ErrorMessage
 */
class UnprocessedAutomationRule extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string,
     *     ErrorCode?: int,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
