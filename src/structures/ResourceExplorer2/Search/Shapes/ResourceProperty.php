<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $Data
 * @property \Aws\Api\DateTimeResult|null $LastReportedAt
 * @property string|null $Name
 */
class ResourceProperty extends Shape
{
    /**
     * @param array{
     *     Data?: Document|null,
     *     LastReportedAt?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
