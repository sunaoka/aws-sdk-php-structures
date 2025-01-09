<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property int $maxResults
 * @property string $nextToken
 */
class ListFlowVersionsRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
