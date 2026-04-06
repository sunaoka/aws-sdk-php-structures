<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListConversations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $userId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListConversationsRequest extends Request
{
    /**
     * @param array{
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
