<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ADD'|'REMOVE'|'MODIFY' $Type
 * @property string $Description
 */
class SchemaChangeDetails extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'ADD'|'REMOVE'|'MODIFY',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
