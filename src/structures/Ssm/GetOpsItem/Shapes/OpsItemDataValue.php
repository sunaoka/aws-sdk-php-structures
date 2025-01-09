<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'SearchableString'|'String' $Type
 */
class OpsItemDataValue extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Type?: 'SearchableString'|'String'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
