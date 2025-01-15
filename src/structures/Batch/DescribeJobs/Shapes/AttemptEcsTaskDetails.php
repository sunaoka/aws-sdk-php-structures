<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerInstanceArn
 * @property string|null $taskArn
 * @property list<AttemptTaskContainerDetails>|null $containers
 */
class AttemptEcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     containerInstanceArn?: string|null,
     *     taskArn?: string|null,
     *     containers?: list<AttemptTaskContainerDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
