<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $streamUI
 * @property string $name
 * @property string $command
 * @property bool|null $streamOutputToCloudWatch
 * @property 'FAIL'|'RESTART'|null $exitBehavior
 */
class Tool extends Shape
{
    /**
     * @param array{
     *     streamUI?: bool|null,
     *     name: string,
     *     command: string,
     *     streamOutputToCloudWatch?: bool|null,
     *     exitBehavior?: 'FAIL'|'RESTART'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
