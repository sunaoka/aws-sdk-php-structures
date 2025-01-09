<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetDataIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirstExecutionFrom
 * @property string $Object
 * @property string $ScheduleExpression
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     FirstExecutionFrom?: string,
     *     Object?: string,
     *     ScheduleExpression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
