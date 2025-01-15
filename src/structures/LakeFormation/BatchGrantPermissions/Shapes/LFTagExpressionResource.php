<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchGrantPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $Name
 */
class LFTagExpressionResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
