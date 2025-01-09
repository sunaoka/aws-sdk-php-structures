<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $conversationId
 * @property string $userId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     conversationId?: string,
     *     userId?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
