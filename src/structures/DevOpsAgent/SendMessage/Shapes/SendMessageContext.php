<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $currentPage
 * @property string|null $lastMessage
 * @property string|null $userActionResponse
 * @property ApprovalAction|null $approvalAction
 */
class SendMessageContext extends Shape
{
    /**
     * @param array{
     *     currentPage?: string|null,
     *     lastMessage?: string|null,
     *     userActionResponse?: string|null,
     *     approvalAction?: ApprovalAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
