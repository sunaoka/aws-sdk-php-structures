<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $externalId
 * @property string $name
 */
class AssetHierarchy extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     externalId?: string|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
