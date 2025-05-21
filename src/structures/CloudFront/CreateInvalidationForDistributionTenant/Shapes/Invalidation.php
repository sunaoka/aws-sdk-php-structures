<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateInvalidationForDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property InvalidationBatch $InvalidationBatch
 */
class Invalidation extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Status: string,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     InvalidationBatch: InvalidationBatch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
