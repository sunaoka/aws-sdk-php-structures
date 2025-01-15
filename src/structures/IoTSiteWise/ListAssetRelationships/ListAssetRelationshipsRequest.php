<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetRelationships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property 'PATH_TO_ROOT' $traversalType
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListAssetRelationshipsRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     traversalType: 'PATH_TO_ROOT',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
