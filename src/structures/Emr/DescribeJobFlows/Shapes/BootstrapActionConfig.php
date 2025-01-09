<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ScriptBootstrapActionConfig $ScriptBootstrapAction
 */
class BootstrapActionConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ScriptBootstrapAction: ScriptBootstrapActionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
