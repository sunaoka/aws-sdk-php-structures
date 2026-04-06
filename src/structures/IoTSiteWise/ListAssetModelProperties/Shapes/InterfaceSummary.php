<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interfaceAssetModelId
 * @property string $interfaceAssetModelPropertyId
 */
class InterfaceSummary extends Shape
{
    /**
     * @param array{
     *     interfaceAssetModelId: string,
     *     interfaceAssetModelPropertyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
