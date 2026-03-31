<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $filterServiceTypes
 */
class ListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filterServiceTypes?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
