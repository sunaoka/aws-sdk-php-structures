<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\AssociateTimeSeriesToAssetProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property string $assetId
 * @property string $propertyId
 * @property string $clientToken
 */
class AssociateTimeSeriesToAssetPropertyRequest extends Request
{
    /**
     * @param array{
     *     alias: string,
     *     assetId: string,
     *     propertyId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
