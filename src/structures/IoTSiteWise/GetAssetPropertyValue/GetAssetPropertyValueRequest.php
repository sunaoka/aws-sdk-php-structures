<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 */
class GetAssetPropertyValueRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
