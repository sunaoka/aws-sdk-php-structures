<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutRegistryCatalogData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 */
class RegistryCatalogData extends Shape
{
    /**
     * @param array{displayName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
