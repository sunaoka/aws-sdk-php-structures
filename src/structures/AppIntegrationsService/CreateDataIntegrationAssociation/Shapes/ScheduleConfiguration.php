<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegrationAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirstExecutionFrom
 * @property string|null $Object
 * @property string $ScheduleExpression
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     FirstExecutionFrom?: string|null,
     *     Object?: string|null,
     *     ScheduleExpression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
