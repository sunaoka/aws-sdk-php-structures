<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $assetType
 * @property \Aws\Api\DateTimeResult|null $updatedAfter
 * @property \Aws\Api\DateTimeResult|null $updatedBefore
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAssetsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetType?: string|null,
     *     updatedAfter?: \Aws\Api\DateTimeResult|null,
     *     updatedBefore?: \Aws\Api\DateTimeResult|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
