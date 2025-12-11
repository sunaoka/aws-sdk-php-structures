<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CanaryName
 */
class CanaryEntity extends Shape
{
    /**
     * @param array{CanaryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
