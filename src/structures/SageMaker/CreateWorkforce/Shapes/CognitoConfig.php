<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPool
 * @property string $ClientId
 */
class CognitoConfig extends Shape
{
    /**
     * @param array{
     *     UserPool: string,
     *     ClientId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
