<?php

namespace Sunaoka\Aws\Structures\Glue\PutAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FormTypeIdentifier
 * @property string|null $Content
 */
class AssetFormInput extends Shape
{
    /**
     * @param array{
     *     FormTypeIdentifier?: string|null,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
