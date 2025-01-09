<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL' $Status
 */
class OperationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Status?: 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
