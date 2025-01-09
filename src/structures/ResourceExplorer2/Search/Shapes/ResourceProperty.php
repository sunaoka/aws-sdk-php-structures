<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $Data
 * @property \Aws\Api\DateTimeResult $LastReportedAt
 * @property string $Name
 */
class ResourceProperty extends Shape
{
    /**
     * @param array{
     *     Data?: Document,
     *     LastReportedAt?: \Aws\Api\DateTimeResult,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
