<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mapRunArn
 * @property int|null $redriveCount
 */
class MapRunRedrivenEventDetails extends Shape
{
    /**
     * @param array{
     *     mapRunArn?: string|null,
     *     redriveCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
