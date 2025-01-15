<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckAccessNotGranted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $actions
 * @property list<string>|null $resources
 */
class Access extends Shape
{
    /**
     * @param array{
     *     actions?: list<string>|null,
     *     resources?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
