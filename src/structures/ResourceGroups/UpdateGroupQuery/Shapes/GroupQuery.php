<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroupQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property ResourceQuery $ResourceQuery
 */
class GroupQuery extends Shape
{
    /**
     * @param array{
     *     GroupName: string,
     *     ResourceQuery: ResourceQuery
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
