<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationOptIn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $TagKey
 * @property list<string> $TagValues
 */
class LFTagKeyResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     TagKey: string,
     *     TagValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
