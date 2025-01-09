<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListIngestionDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $ingestionIdentifier
 * @property int $maxResults
 * @property string $nextToken
 */
class ListIngestionDestinationsRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     ingestionIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
