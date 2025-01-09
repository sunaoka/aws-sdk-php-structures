<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMonitorDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 */
class MediaResourceNeighbor extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
