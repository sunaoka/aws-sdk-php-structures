<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAssetVersionsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
