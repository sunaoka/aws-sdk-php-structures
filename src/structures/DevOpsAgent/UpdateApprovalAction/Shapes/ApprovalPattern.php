<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateApprovalAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tool
 * @property array<string, string> $argumentPins
 */
class ApprovalPattern extends Shape
{
    /**
     * @param array{
     *     tool: string,
     *     argumentPins: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
