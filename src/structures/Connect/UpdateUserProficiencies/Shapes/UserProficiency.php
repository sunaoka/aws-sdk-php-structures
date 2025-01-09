<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserProficiencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $AttributeValue
 * @property float $Level
 */
class UserProficiency extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     AttributeValue: string,
     *     Level: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
