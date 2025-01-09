<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $streamUI
 * @property string $name
 * @property string $command
 * @property bool $streamOutputToCloudWatch
 * @property 'FAIL'|'RESTART' $exitBehavior
 */
class Tool extends Shape
{
    /**
     * @param array{
     *     streamUI?: bool,
     *     name: string,
     *     command: string,
     *     streamOutputToCloudWatch?: bool,
     *     exitBehavior?: 'FAIL'|'RESTART'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
