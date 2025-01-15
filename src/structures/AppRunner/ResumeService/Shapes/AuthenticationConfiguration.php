<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionArn
 * @property string|null $AccessRoleArn
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     ConnectionArn?: string|null,
     *     AccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
