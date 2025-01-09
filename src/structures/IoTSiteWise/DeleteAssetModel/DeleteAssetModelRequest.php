<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $clientToken
 * @property string $ifMatch
 * @property string $ifNoneMatch
 * @property 'LATEST'|'ACTIVE' $matchForVersionType
 */
class DeleteAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
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
