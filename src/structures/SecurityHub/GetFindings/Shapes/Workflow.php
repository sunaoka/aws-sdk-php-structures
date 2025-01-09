<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEW'|'NOTIFIED'|'RESOLVED'|'SUPPRESSED' $Status
 */
class Workflow extends Shape
{
    /**
     * @param array{Status?: 'NEW'|'NOTIFIED'|'RESOLVED'|'SUPPRESSED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
