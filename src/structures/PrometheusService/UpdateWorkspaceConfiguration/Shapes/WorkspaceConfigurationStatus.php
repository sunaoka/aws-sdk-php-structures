<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'UPDATING'|'UPDATE_FAILED' $statusCode
 * @property string|null $statusReason
 */
class WorkspaceConfigurationStatus extends Shape
{
    /**
     * @param array{
     *     statusCode: 'ACTIVE'|'UPDATING'|'UPDATE_FAILED',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
