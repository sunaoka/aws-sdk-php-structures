<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED'|null $ExecutionStatus
 * @property string|null $StatusMessage
 */
class LastExecutionStatus extends Shape
{
    /**
     * @param array{
     *     ExecutionStatus?: 'COMPLETED'|'IN_PROGRESS'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
