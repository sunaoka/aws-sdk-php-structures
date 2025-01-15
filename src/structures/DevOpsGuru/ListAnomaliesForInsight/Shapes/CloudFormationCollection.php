<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StackNames
 */
class CloudFormationCollection extends Shape
{
    /**
     * @param array{StackNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
