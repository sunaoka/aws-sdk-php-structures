<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property list<string>|null $Args
 */
class ScriptBootstrapActionConfig extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     Args?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
