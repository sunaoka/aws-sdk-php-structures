<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirstName
 * @property string $LastName
 */
class UserIdentityInfoLite extends Shape
{
    /**
     * @param array{
     *     FirstName?: string,
     *     LastName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
