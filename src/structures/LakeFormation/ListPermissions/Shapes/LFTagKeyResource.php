<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $TagKey
 * @property list<string> $TagValues
 */
class LFTagKeyResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     TagKey: string,
     *     TagValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
