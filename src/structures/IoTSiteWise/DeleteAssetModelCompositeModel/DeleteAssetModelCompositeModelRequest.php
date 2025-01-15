<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string|null $clientToken
 * @property string|null $ifMatch
 * @property string|null $ifNoneMatch
 * @property 'LATEST'|'ACTIVE'|null $matchForVersionType
 */
class DeleteAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelId: string,
     *     clientToken?: string|null,
     *     ifMatch?: string|null,
     *     ifNoneMatch?: string|null,
     *     matchForVersionType?: 'LATEST'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
