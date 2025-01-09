<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property 'ENABLED'|'DISABLED' $propertyNotificationState
 * @property string $clientToken
 * @property string $propertyUnit
 */
class UpdateAssetPropertyRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     propertyId: string,
     *     propertyAlias?: string,
     *     propertyNotificationState?: 'ENABLED'|'DISABLED',
     *     clientToken?: string,
     *     propertyUnit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
