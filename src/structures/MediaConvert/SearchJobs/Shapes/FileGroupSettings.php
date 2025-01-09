<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property DestinationSettings $DestinationSettings
 */
class FileGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination?: string,
     *     DestinationSettings?: DestinationSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
