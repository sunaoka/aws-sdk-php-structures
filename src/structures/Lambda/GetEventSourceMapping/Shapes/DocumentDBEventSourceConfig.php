<?php

namespace Sunaoka\Aws\Structures\Lambda\GetEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $CollectionName
 * @property 'UpdateLookup'|'Default' $FullDocument
 */
class DocumentDBEventSourceConfig extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string,
     *     CollectionName?: string,
     *     FullDocument?: 'UpdateLookup'|'Default'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
