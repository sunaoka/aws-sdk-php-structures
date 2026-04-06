<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property list<SheetLayoutGroupMember> $Members
 */
class SheetLayoutGroup extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Members: list<SheetLayoutGroupMember>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
