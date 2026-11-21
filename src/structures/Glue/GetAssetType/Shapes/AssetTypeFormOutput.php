<?php

namespace Sunaoka\Aws\Structures\Glue\GetAssetType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FormTypeId
 */
class AssetTypeFormOutput extends Shape
{
    /**
     * @param array{FormTypeId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
