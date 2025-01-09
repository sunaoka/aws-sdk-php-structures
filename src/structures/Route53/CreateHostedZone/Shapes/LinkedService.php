<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServicePrincipal
 * @property string $Description
 */
class LinkedService extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
