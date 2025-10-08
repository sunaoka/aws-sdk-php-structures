<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SloName
 * @property string|null $SloArn
 */
class ServiceLevelObjectiveEntity extends Shape
{
    /**
     * @param array{
     *     SloName?: string|null,
     *     SloArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
