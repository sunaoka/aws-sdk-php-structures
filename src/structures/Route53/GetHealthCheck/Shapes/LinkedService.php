<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServicePrincipal
 * @property string|null $Description
 */
class LinkedService extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
