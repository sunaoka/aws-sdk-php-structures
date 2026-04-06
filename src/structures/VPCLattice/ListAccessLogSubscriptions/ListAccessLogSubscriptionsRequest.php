<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListAccessLogSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAccessLogSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     resourceIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
