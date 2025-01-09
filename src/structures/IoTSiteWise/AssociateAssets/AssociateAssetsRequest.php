<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\AssociateAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $hierarchyId
 * @property string $childAssetId
 * @property string $clientToken
 */
class AssociateAssetsRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     hierarchyId: string,
     *     childAssetId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
