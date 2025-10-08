<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListWorkloadIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 20>|null $maxResults
 */
class ListWorkloadIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
