<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 */
class DomainDetails extends Shape
{
    /**
     * @param array{Domain?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
