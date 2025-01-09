<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 * @property Property $assetProperty
 * @property string $id
 * @property string $externalId
 */
class CompositeModelProperty extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: string,
     *     assetProperty: Property,
     *     id?: string,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
