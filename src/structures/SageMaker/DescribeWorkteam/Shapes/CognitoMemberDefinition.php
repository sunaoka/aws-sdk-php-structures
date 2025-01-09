<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPool
 * @property string $UserGroup
 * @property string $ClientId
 */
class CognitoMemberDefinition extends Shape
{
    /**
     * @param array{
     *     UserPool: string,
     *     UserGroup: string,
     *     ClientId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
