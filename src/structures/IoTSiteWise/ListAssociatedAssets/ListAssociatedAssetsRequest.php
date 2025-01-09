<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssociatedAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $hierarchyId
 * @property 'PARENT'|'CHILD' $traversalDirection
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssociatedAssetsRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     hierarchyId?: string,
     *     traversalDirection?: 'PARENT'|'CHILD',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
