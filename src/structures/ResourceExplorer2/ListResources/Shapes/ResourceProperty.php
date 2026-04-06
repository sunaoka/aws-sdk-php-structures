<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $LastReportedAt
 * @property Document|null $Data
 */
class ResourceProperty extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     LastReportedAt?: \Aws\Api\DateTimeResult|null,
     *     Data?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
