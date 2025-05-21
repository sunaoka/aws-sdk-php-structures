<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetInvalidationForDistributionTenant\Shapes;

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
