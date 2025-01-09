<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetThirdPartyJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $actionExecutionId
 */
class ActionContext extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     actionExecutionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
