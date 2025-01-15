<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $email
 * @property string|null $date
 */
class UserInfo extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     email?: string|null,
     *     date?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
