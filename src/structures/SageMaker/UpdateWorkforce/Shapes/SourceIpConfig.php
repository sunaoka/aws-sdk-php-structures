<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Cidrs
 */
class SourceIpConfig extends Shape
{
    /**
     * @param array{Cidrs: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
