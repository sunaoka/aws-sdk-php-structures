<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT_DATA_STORE'|'AWS_SERVICE' $Type
 * @property string $Location
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     Type: 'EVENT_DATA_STORE'|'AWS_SERVICE',
     *     Location: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
