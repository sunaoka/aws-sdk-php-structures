<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStreamingSessionBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string|null $ownedBy
 * @property string $studioId
 */
class ListStreamingSessionBackupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     ownedBy?: string|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
