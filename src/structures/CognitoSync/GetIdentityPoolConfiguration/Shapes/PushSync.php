<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetIdentityPoolConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ApplicationArns
 * @property string|null $RoleArn
 */
class PushSync extends Shape
{
    /**
     * @param array{
     *     ApplicationArns?: list<string>|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
