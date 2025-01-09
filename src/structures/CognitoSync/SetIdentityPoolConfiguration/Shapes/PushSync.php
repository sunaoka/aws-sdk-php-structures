<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SetIdentityPoolConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ApplicationArns
 * @property string $RoleArn
 */
class PushSync extends Shape
{
    /**
     * @param array{
     *     ApplicationArns?: list<string>,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
