<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListInvalidationsForDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Status
 */
class InvalidationSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     Status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
