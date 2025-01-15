<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RemoveLFTagsFromResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $ResourceArn
 */
class DataLocationResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
