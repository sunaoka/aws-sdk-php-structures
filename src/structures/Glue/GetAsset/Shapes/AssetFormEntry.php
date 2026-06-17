<?php

namespace Sunaoka\Aws\Structures\Glue\GetAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FormTypeId
 * @property string|null $Content
 */
class AssetFormEntry extends Shape
{
    /**
     * @param array{
     *     FormTypeId?: string|null,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
