<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListConfiguredAudienceModelAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $nextToken
 * @property int $maxResults
 */
class ListConfiguredAudienceModelAssociationsRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
