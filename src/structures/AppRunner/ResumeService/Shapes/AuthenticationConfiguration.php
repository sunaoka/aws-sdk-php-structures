<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionArn
 * @property string $AccessRoleArn
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     ConnectionArn?: string,
     *     AccessRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
