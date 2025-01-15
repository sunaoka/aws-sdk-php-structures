<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeAccessControlConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'USER'|'GROUP' $Type
 * @property 'ALLOW'|'DENY' $Access
 * @property string|null $DataSourceId
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'USER'|'GROUP',
     *     Access: 'ALLOW'|'DENY',
     *     DataSourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
