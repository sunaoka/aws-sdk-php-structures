<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<GroupFilters> $GroupFiltersList
 */
class Route extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     GroupFiltersList: list<GroupFilters>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
