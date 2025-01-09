<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 */
class GetAssetPropertyValueRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
