<?php

namespace Sunaoka\Aws\Structures\Interconnect\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\Provider|null $provider
 * @property string|null $location
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     provider?: Shapes\Provider|null,
     *     location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
