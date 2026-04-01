<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemons;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clusterArn
 * @property list<string>|null $capacityProviderArns
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListDaemonsRequest extends Request
{
    /**
     * @param array{
     *     clusterArn?: string|null,
     *     capacityProviderArns?: list<string>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
