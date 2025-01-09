<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListCompositionRelationships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListCompositionRelationshipsRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
