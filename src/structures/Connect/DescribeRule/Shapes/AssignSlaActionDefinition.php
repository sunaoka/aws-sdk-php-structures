<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CASES' $SlaAssignmentType
 * @property CaseSlaConfiguration|null $CaseSlaConfiguration
 */
class AssignSlaActionDefinition extends Shape
{
    /**
     * @param array{
     *     SlaAssignmentType: 'CASES',
     *     CaseSlaConfiguration?: CaseSlaConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
