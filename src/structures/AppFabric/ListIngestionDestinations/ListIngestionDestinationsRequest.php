<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListIngestionDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $ingestionIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListIngestionDestinationsRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     ingestionIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
