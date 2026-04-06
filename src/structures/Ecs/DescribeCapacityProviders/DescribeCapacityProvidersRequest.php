<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $capacityProviders
 * @property string|null $cluster
 * @property list<'TAGS'>|null $include
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeCapacityProvidersRequest extends Request
{
    /**
     * @param array{
     *     capacityProviders?: list<string>|null,
     *     cluster?: string|null,
     *     include?: list<'TAGS'>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
