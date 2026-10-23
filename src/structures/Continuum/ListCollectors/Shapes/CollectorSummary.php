<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collectorId
 * @property string $collectorArn
 * @property 'AWS_COLLECTOR' $type
 * @property 'ACTIVE'|'PENDING_DELETION' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CollectorSummary extends Shape
{
    /**
     * @param array{
     *     collectorId: string,
     *     collectorArn: string,
     *     type: 'AWS_COLLECTOR',
     *     status: 'ACTIVE'|'PENDING_DELETION',
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
