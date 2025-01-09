<?php

namespace Sunaoka\Aws\Structures\ECRPublic\GetRegistryCatalogData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 */
class RegistryCatalogData extends Shape
{
    /**
     * @param array{displayName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
