<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'DIMENSION'|'TAG'|'COST_CATEGORY'|null $type
 */
class GroupDefinition extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     type?: 'DIMENSION'|'TAG'|'COST_CATEGORY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
