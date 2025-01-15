<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 * @property Property $assetProperty
 * @property string|null $id
 * @property string|null $externalId
 */
class CompositeModelProperty extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: string,
     *     assetProperty: Property,
     *     id?: string|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
