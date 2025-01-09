<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START'|'RUNNING'|'COMPLETE'|'ABORT'|'FAIL'|'OTHER' $eventType
 * @property list<NameIdentifier> $inputs
 * @property NameIdentifier $job
 * @property list<NameIdentifier> $outputs
 * @property string $runId
 */
class OpenLineageRunEventSummary extends Shape
{
    /**
     * @param array{
     *     eventType?: 'START'|'RUNNING'|'COMPLETE'|'ABORT'|'FAIL'|'OTHER',
     *     inputs?: list<NameIdentifier>,
     *     job?: NameIdentifier,
     *     outputs?: list<NameIdentifier>,
     *     runId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
