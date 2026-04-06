<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string $name
 * @property string|null $externalId
 */
class AssetHierarchy extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name: string,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
