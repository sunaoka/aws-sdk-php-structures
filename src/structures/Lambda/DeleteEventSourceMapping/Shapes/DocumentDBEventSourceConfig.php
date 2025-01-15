<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseName
 * @property string|null $CollectionName
 * @property 'UpdateLookup'|'Default'|null $FullDocument
 */
class DocumentDBEventSourceConfig extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     CollectionName?: string|null,
     *     FullDocument?: 'UpdateLookup'|'Default'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
