<?php

namespace Sunaoka\Aws\Structures\Redshift\RegisterNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 */
class ProvisionedIdentifier extends Shape
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
