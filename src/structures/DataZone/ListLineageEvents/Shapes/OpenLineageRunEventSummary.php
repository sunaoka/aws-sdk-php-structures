<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START'|'RUNNING'|'COMPLETE'|'ABORT'|'FAIL'|'OTHER'|null $eventType
 * @property list<NameIdentifier>|null $inputs
 * @property NameIdentifier|null $job
 * @property list<NameIdentifier>|null $outputs
 * @property string|null $runId
 */
class OpenLineageRunEventSummary extends Shape
{
    /**
     * @param array{
     *     eventType?: 'START'|'RUNNING'|'COMPLETE'|'ABORT'|'FAIL'|'OTHER'|null,
     *     inputs?: list<NameIdentifier>|null,
     *     job?: NameIdentifier|null,
     *     outputs?: list<NameIdentifier>|null,
     *     runId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
