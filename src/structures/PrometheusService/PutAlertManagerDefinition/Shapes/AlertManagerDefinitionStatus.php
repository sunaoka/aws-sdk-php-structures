<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAlertManagerDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATION_FAILED'|'UPDATE_FAILED' $statusCode
 * @property string $statusReason
 */
class AlertManagerDefinitionStatus extends Shape
{
    /**
     * @param array{
     *     statusCode: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATION_FAILED'|'UPDATE_FAILED',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
