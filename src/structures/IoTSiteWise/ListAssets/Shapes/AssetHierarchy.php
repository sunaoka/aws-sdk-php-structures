<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $externalId
 */
class AssetHierarchy extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name: string,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
