<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL'|null $Status
 */
class OperationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Status?: 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
