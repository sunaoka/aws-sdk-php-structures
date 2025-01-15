<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListPrivateGraphEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListPrivateGraphEndpointsRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
