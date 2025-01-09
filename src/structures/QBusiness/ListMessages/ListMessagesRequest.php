<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $conversationId
 * @property string $applicationId
 * @property string $userId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListMessagesRequest extends Request
{
    /**
     * @param array{
     *     conversationId: string,
     *     applicationId: string,
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
