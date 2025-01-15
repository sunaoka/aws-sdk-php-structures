<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'String'|'StringList'|null $Type
 * @property string|null $Description
 * @property string|null $DefaultValue
 */
class DocumentParameter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: 'String'|'StringList'|null,
     *     Description?: string|null,
     *     DefaultValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
