<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdNamespaceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListIdNamespaceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
