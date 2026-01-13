<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START'|'RUNNING'|'COMPLETE'|'ABORT'|'FAIL'|'OTHER'|null $eventType
 * @property string|null $runId
 * @property NameIdentifier|null $job
 * @property list<NameIdentifier>|null $inputs
 * @property list<NameIdentifier>|null $outputs
 */
class OpenLineageRunEventSummary extends Shape
{
    /**
     * @param array{
     *     eventType?: 'START'|'RUNNING'|'COMPLETE'|'ABORT'|'FAIL'|'OTHER'|null,
     *     runId?: string|null,
     *     job?: NameIdentifier|null,
     *     inputs?: list<NameIdentifier>|null,
     *     outputs?: list<NameIdentifier>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
