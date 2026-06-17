<?php

namespace Sunaoka\Aws\Structures\Glue\GetAssetType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FormTypeIdentifier
 */
class AssetTypeFormReference extends Shape
{
    /**
     * @param array{FormTypeIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
