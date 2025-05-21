<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListDeployActionExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TARGET_STATUS'|null $name
 * @property list<string>|null $values
 */
class TargetFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'TARGET_STATUS'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
