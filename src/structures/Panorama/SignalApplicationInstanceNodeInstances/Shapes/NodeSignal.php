<?php

namespace Sunaoka\Aws\Structures\Panorama\SignalApplicationInstanceNodeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeInstanceId
 * @property 'PAUSE'|'RESUME' $Signal
 */
class NodeSignal extends Shape
{
    /**
     * @param array{
     *     NodeInstanceId: string,
     *     Signal: 'PAUSE'|'RESUME'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
