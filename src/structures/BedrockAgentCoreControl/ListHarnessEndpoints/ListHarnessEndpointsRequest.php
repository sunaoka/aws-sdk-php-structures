<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListHarnessEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListHarnessEndpointsRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
