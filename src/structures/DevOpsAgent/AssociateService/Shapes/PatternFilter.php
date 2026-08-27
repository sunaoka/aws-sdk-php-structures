<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $patterns
 */
class PatternFilter extends Shape
{
    /**
     * @param array{patterns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
