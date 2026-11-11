<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchRevokePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property 'TABLE' $ResourceType
 */
class AnyResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ResourceType: 'TABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
