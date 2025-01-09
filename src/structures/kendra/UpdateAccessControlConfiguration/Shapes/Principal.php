<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateAccessControlConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'USER'|'GROUP' $Type
 * @property 'ALLOW'|'DENY' $Access
 * @property string $DataSourceId
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'USER'|'GROUP',
     *     Access: 'ALLOW'|'DENY',
     *     DataSourceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
