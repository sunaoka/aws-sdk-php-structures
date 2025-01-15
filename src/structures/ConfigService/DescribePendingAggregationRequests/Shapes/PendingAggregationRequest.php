<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribePendingAggregationRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RequesterAccountId
 * @property string|null $RequesterAwsRegion
 */
class PendingAggregationRequest extends Shape
{
    /**
     * @param array{
     *     RequesterAccountId?: string|null,
     *     RequesterAwsRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
