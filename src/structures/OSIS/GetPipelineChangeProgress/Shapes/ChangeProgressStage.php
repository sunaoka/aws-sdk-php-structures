<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class ChangeProgressStage extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     Description?: string|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
