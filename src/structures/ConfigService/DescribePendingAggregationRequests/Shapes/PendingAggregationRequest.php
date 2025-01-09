<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribePendingAggregationRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RequesterAccountId
 * @property string $RequesterAwsRegion
 */
class PendingAggregationRequest extends Shape
{
    /**
     * @param array{
     *     RequesterAccountId?: string,
     *     RequesterAwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
