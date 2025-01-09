<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string $AmazonForecastRoleArn
 */
class TimeSeriesForecastingSettings extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED',
     *     AmazonForecastRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
