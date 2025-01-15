<?php

namespace Sunaoka\Aws\Structures\Synthetics\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Arn
 */
class GroupSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
