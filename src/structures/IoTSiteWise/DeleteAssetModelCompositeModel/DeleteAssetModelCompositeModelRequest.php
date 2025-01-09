<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string $clientToken
 * @property string $ifMatch
 * @property string $ifNoneMatch
 * @property 'LATEST'|'ACTIVE' $matchForVersionType
 */
class DeleteAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelId: string,
     *     clientToken?: string,
     *     ifMatch?: string,
     *     ifNoneMatch?: string,
     *     matchForVersionType?: 'LATEST'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
