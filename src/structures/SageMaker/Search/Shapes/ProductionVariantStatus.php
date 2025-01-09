<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Creating'|'Updating'|'Deleting'|'ActivatingTraffic'|'Baking' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class ProductionVariantStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Creating'|'Updating'|'Deleting'|'ActivatingTraffic'|'Baking',
     *     StatusMessage?: string,
     *     StartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
