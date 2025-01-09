<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property \Aws\Api\DateTimeResult $lastAccessed
 */
class UnusedAction extends Shape
{
    /**
     * @param array{
     *     action: string,
     *     lastAccessed?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
