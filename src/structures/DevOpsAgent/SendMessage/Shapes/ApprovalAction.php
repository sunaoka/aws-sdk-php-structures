<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $toolUseId
 * @property string|null $interruptId
 * @property string|null $approvalId
 * @property string|null $buttonText
 * @property 'APPROVED'|'REJECTED'|null $action
 */
class ApprovalAction extends Shape
{
    /**
     * @param array{
     *     toolUseId?: string|null,
     *     interruptId?: string|null,
     *     approvalId?: string|null,
     *     buttonText?: string|null,
     *     action?: 'APPROVED'|'REJECTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
