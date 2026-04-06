<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $conversationId
 * @property string|null $userId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     conversationId?: string|null,
     *     userId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
