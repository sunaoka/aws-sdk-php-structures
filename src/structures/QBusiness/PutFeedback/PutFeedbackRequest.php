<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $userId
 * @property string $conversationId
 * @property string $messageId
 * @property \Aws\Api\DateTimeResult|null $messageCopiedAt
 * @property Shapes\MessageUsefulnessFeedback|null $messageUsefulness
 */
class PutFeedbackRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId?: string|null,
     *     conversationId: string,
     *     messageId: string,
     *     messageCopiedAt?: \Aws\Api\DateTimeResult|null,
     *     messageUsefulness?: Shapes\MessageUsefulnessFeedback|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
