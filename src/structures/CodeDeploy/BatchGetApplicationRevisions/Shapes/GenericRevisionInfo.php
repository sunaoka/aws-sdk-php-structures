<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property list<string> $deploymentGroups
 * @property \Aws\Api\DateTimeResult $firstUsedTime
 * @property \Aws\Api\DateTimeResult $lastUsedTime
 * @property \Aws\Api\DateTimeResult $registerTime
 */
class GenericRevisionInfo extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     deploymentGroups?: list<string>,
     *     firstUsedTime?: \Aws\Api\DateTimeResult,
     *     lastUsedTime?: \Aws\Api\DateTimeResult,
     *     registerTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
