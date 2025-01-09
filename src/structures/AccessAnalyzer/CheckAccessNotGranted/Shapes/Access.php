<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckAccessNotGranted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $actions
 * @property list<string> $resources
 */
class Access extends Shape
{
    /**
     * @param array{
     *     actions?: list<string>,
     *     resources?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
