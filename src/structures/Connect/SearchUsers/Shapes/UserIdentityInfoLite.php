<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirstName
 * @property string|null $LastName
 */
class UserIdentityInfoLite extends Shape
{
    /**
     * @param array{
     *     FirstName?: string|null,
     *     LastName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
