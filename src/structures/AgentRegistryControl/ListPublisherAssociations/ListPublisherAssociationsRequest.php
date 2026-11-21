<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListPublisherAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $publisherArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPublisherAssociationsRequest extends Request
{
    /**
     * @param array{
     *     publisherArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
