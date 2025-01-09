<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetCommits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $email
 * @property string $date
 */
class UserInfo extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     email?: string,
     *     date?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
