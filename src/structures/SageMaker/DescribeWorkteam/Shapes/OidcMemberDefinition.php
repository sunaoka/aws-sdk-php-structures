<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Groups
 */
class OidcMemberDefinition extends Shape
{
    /**
     * @param array{Groups?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
