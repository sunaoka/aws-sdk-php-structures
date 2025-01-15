<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Destination
 * @property DestinationSettings|null $DestinationSettings
 */
class FileGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination?: string|null,
     *     DestinationSettings?: DestinationSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
