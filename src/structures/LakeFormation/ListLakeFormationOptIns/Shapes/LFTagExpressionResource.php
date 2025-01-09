<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLakeFormationOptIns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $Name
 */
class LFTagExpressionResource extends Shape
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
