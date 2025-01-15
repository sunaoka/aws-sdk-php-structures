<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $conversationId
 * @property string $applicationId
 * @property string|null $userId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListMessagesRequest extends Request
{
    /**
     * @param array{
     *     conversationId: string,
     *     applicationId: string,
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
