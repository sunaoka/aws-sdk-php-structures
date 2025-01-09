<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 * @property string $properties
 */
class User extends Shape
{
    /**
     * @param array{
     *     userId: string,
     *     properties?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
