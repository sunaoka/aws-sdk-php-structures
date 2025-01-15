<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetDiscoveredResourceCounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $resourceTypes
 * @property int<0, 100>|null $limit
 * @property string|null $nextToken
 */
class GetDiscoveredResourceCountsRequest extends Request
{
    /**
     * @param array{
     *     resourceTypes?: list<string>|null,
     *     limit?: int<0, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
