<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Creating'|'Updating'|'Deleting'|'ActivatingTraffic'|'Baking' $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class ProductionVariantStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Creating'|'Updating'|'Deleting'|'ActivatingTraffic'|'Baking',
     *     StatusMessage?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
