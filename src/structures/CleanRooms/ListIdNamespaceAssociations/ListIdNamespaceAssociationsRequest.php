<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdNamespaceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $nextToken
 * @property int $maxResults
 */
class ListIdNamespaceAssociationsRequest extends Request
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
