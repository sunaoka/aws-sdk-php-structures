<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureMessage
 * @property list<string>|null $EksRoleAccessEntries
 * @property string|null $SlrAccessEntry
 */
class ClusterMetadata extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string|null,
     *     EksRoleAccessEntries?: list<string>|null,
     *     SlrAccessEntry?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
