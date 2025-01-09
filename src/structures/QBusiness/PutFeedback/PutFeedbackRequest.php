<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 * @property string $conversationId
 * @property string $messageId
 * @property \Aws\Api\DateTimeResult $messageCopiedAt
 * @property Shapes\MessageUsefulnessFeedback $messageUsefulness
 */
class PutFeedbackRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId?: string,
     *     conversationId: string,
     *     messageId: string,
     *     messageCopiedAt?: \Aws\Api\DateTimeResult,
     *     messageUsefulness?: Shapes\MessageUsefulnessFeedback
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
