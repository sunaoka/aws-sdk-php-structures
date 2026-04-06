<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $site
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'ENABLED'|'DISABLED'|'DECOMMISSIONED'|null $state
 */
class ListDestinationsRequest extends Request
{
    /**
     * @param array{
     *     site: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     state?: 'ENABLED'|'DISABLED'|'DECOMMISSIONED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
