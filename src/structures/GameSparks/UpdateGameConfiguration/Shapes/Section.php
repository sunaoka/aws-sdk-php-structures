<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateGameConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $Attributes
 * @property string|null $Name
 * @property int<0, max>|null $Size
 */
class Section extends Shape
{
    /**
     * @param array{
     *     Attributes?: Document|null,
     *     Name?: string|null,
     *     Size?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
