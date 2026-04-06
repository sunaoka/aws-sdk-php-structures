<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredModelAlgorithmAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $membershipIdentifier
 */
class ListConfiguredModelAlgorithmAssociationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
