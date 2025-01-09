<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroupQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TAG_FILTERS_1_0'|'CLOUDFORMATION_STACK_1_0' $Type
 * @property string $Query
 */
class ResourceQuery extends Shape
{
    /**
     * @param array{
     *     Type: 'TAG_FILTERS_1_0'|'CLOUDFORMATION_STACK_1_0',
     *     Query: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
