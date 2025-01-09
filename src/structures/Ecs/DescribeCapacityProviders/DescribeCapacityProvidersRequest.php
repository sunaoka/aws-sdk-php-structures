<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $capacityProviders
 * @property list<'TAGS'> $include
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeCapacityProvidersRequest extends Request
{
    /**
     * @param array{
     *     capacityProviders?: list<string>,
     *     include?: list<'TAGS'>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
