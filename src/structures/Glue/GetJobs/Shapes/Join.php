<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property 'equijoin'|'left'|'right'|'outer'|'leftsemi'|'leftanti' $JoinType
 * @property list<JoinColumn> $Columns
 */
class Join extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     JoinType: 'equijoin'|'left'|'right'|'outer'|'leftsemi'|'leftanti',
     *     Columns: list<JoinColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
