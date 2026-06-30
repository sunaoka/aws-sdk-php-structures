<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIntermediateTableVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $intermediateTableIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListIntermediateTableVersionsRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     intermediateTableIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
