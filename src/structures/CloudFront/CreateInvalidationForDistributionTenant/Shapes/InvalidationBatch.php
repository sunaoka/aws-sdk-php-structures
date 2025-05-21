<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateInvalidationForDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Paths $Paths
 * @property string $CallerReference
 */
class InvalidationBatch extends Shape
{
    /**
     * @param array{
     *     Paths: Paths,
     *     CallerReference: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
