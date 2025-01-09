<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListIngestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListIngestionsRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
