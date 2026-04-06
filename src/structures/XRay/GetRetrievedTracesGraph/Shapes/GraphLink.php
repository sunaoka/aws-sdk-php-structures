<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReferenceType
 * @property string|null $SourceTraceId
 * @property list<string>|null $DestinationTraceIds
 */
class GraphLink extends Shape
{
    /**
     * @param array{
     *     ReferenceType?: string|null,
     *     SourceTraceId?: string|null,
     *     DestinationTraceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
