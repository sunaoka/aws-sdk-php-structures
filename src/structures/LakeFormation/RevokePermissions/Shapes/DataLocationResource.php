<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RevokePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $ResourceArn
 */
class DataLocationResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
