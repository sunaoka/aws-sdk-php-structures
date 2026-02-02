<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $optionName
 * @property string $value
 * @property string $type
 */
class Setting extends Shape
{
    /**
     * @param array{
     *     optionName: string,
     *     value: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
