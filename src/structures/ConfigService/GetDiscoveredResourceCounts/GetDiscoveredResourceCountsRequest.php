<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetDiscoveredResourceCounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceTypes
 * @property int<0, 100> $limit
 * @property string $nextToken
 */
class GetDiscoveredResourceCountsRequest extends Request
{
    /**
     * @param array{
     *     resourceTypes?: list<string>,
     *     limit?: int<0, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
