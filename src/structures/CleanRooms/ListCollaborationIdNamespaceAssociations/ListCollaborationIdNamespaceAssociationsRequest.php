<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationIdNamespaceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListCollaborationIdNamespaceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
