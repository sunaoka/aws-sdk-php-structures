<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartUpdateSignalMap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MediaResourceNeighbor>|null $Destinations
 * @property string|null $Name
 * @property list<MediaResourceNeighbor>|null $Sources
 */
class MediaResource extends Shape
{
    /**
     * @param array{
     *     Destinations?: list<MediaResourceNeighbor>|null,
     *     Name?: string|null,
     *     Sources?: list<MediaResourceNeighbor>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
