<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobsByConsumableResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobQueueArn
 * @property string $jobName
 * @property string|null $jobDefinitionArn
 * @property string|null $shareIdentifier
 * @property string $jobStatus
 * @property int $quantity
 * @property string|null $statusReason
 * @property int|null $startedAt
 * @property int $createdAt
 * @property ConsumableResourceProperties $consumableResourceProperties
 */
class ListJobsByConsumableResourceSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobQueueArn: string,
     *     jobName: string,
     *     jobDefinitionArn?: string|null,
     *     shareIdentifier?: string|null,
     *     jobStatus: string,
     *     quantity: int,
     *     statusReason?: string|null,
     *     startedAt?: int|null,
     *     createdAt: int,
     *     consumableResourceProperties: ConsumableResourceProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
