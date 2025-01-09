<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RemoveLFTagsFromResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $Name
 */
class DatabaseResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
