<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListConversations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListConversationsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
