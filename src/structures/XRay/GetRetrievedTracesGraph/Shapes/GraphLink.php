<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReferenceType
 * @property string $SourceTraceId
 * @property list<string> $DestinationTraceIds
 */
class GraphLink extends Shape
{
    /**
     * @param array{
     *     ReferenceType?: string,
     *     SourceTraceId?: string,
     *     DestinationTraceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
