<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string|null $assetModelCompositeModelExternalId
 * @property string|null $assetModelCompositeModelDescription
 * @property string $assetModelCompositeModelName
 * @property string|null $clientToken
 * @property list<Shapes\AssetModelProperty>|null $assetModelCompositeModelProperties
 * @property string|null $ifMatch
 * @property string|null $ifNoneMatch
 * @property 'LATEST'|'ACTIVE'|null $matchForVersionType
 */
class UpdateAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelId: string,
     *     assetModelCompositeModelExternalId?: string|null,
     *     assetModelCompositeModelDescription?: string|null,
     *     assetModelCompositeModelName: string,
     *     clientToken?: string|null,
     *     assetModelCompositeModelProperties?: list<Shapes\AssetModelProperty>|null,
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
