<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationConfiguredAudienceModelAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCollaborationConfiguredAudienceModelAssociationsRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
