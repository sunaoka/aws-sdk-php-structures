<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateOpsItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'SearchableString'|'String'|null $Type
 */
class OpsItemDataValue extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Type?: 'SearchableString'|'String'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
