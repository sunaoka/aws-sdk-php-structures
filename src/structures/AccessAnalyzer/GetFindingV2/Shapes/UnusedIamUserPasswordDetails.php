<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $lastAccessed
 */
class UnusedIamUserPasswordDetails extends Shape
{
    /**
     * @param array{lastAccessed?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
