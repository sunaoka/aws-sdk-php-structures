<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'String'|'StringList' $Type
 * @property string $Description
 * @property string $DefaultValue
 */
class DocumentParameter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: 'String'|'StringList',
     *     Description?: string,
     *     DefaultValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
