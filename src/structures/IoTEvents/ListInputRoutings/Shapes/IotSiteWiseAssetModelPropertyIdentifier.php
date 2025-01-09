<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetModelId
 * @property string $propertyId
 */
class IotSiteWiseAssetModelPropertyIdentifier extends Shape
{
    /**
     * @param array{
     *     assetModelId: string,
     *     propertyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
