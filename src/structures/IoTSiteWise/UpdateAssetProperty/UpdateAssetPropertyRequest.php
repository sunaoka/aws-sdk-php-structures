<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string|null $propertyAlias
 * @property 'ENABLED'|'DISABLED'|null $propertyNotificationState
 * @property string|null $clientToken
 * @property string|null $propertyUnit
 */
class UpdateAssetPropertyRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     propertyId: string,
     *     propertyAlias?: string|null,
     *     propertyNotificationState?: 'ENABLED'|'DISABLED'|null,
     *     clientToken?: string|null,
     *     propertyUnit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
