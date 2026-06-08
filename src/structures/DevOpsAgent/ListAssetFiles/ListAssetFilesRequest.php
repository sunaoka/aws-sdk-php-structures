<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetFiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 * @property int<1, max>|null $assetVersion
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAssetFilesRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string,
     *     assetVersion?: int<1, max>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
