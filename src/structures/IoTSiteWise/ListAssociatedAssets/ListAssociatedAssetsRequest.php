<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssociatedAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string|null $hierarchyId
 * @property 'PARENT'|'CHILD'|null $traversalDirection
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListAssociatedAssetsRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     hierarchyId?: string|null,
     *     traversalDirection?: 'PARENT'|'CHILD'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
