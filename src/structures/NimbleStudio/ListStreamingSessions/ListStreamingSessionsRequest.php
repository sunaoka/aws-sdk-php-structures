<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStreamingSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $createdBy
 * @property string|null $nextToken
 * @property string|null $ownedBy
 * @property string|null $sessionIds
 * @property string $studioId
 */
class ListStreamingSessionsRequest extends Request
{
    /**
     * @param array{
     *     createdBy?: string|null,
     *     nextToken?: string|null,
     *     ownedBy?: string|null,
     *     sessionIds?: string|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
