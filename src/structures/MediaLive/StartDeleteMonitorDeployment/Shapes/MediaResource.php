<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartDeleteMonitorDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MediaResourceNeighbor> $Destinations
 * @property string $Name
 * @property list<MediaResourceNeighbor> $Sources
 */
class MediaResource extends Shape
{
    /**
     * @param array{
     *     Destinations?: list<MediaResourceNeighbor>,
     *     Name?: string,
     *     Sources?: list<MediaResourceNeighbor>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
