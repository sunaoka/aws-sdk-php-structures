<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelInterfaceRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $interfaceAssetModelId
 * @property string|null $clientToken
 */
class DeleteAssetModelInterfaceRelationshipRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     interfaceAssetModelId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
