<?php

namespace Sunaoka\Aws\Structures\SecurityIR\SendFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $resultId
 * @property 'USEFUL'|'NOT_USEFUL' $usefulness
 * @property string|null $comment
 */
class SendFeedbackRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     resultId: string,
     *     usefulness: 'USEFUL'|'NOT_USEFUL',
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
