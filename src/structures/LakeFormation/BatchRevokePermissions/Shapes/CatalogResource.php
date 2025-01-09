<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchRevokePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 */
class CatalogResource extends Shape
{
    /**
     * @param array{Id?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
