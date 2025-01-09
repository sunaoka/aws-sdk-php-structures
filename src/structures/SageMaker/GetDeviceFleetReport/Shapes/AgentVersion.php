<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetDeviceFleetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 * @property int $AgentCount
 */
class AgentVersion extends Shape
{
    /**
     * @param array{
     *     Version: string,
     *     AgentCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
