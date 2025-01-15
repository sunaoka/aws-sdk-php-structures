<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyName
 * @property list<string>|null $Values
 */
class FoundByKeyValue extends Shape
{
    /**
     * @param array{
     *     KeyName?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
