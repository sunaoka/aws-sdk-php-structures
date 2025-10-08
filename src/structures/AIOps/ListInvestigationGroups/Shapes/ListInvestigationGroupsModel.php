<?php

namespace Sunaoka\Aws\Structures\AIOps\ListInvestigationGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 */
class ListInvestigationGroupsModel extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
