<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class ChangeProgressStage extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     Description?: string,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
