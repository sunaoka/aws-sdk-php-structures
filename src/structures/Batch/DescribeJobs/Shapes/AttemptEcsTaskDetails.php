<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerInstanceArn
 * @property string $taskArn
 * @property list<AttemptTaskContainerDetails> $containers
 */
class AttemptEcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     containerInstanceArn?: string,
     *     taskArn?: string,
     *     containers?: list<AttemptTaskContainerDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
