<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Role
 */
class UpdateWebAppIdentityCenterConfig extends Shape
{
    /**
     * @param array{Role?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
