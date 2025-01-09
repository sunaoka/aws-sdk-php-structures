<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mapRunArn
 * @property int $redriveCount
 */
class MapRunRedrivenEventDetails extends Shape
{
    /**
     * @param array{
     *     mapRunArn?: string,
     *     redriveCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
