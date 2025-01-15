<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetApplicationRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property list<string>|null $deploymentGroups
 * @property \Aws\Api\DateTimeResult|null $firstUsedTime
 * @property \Aws\Api\DateTimeResult|null $lastUsedTime
 * @property \Aws\Api\DateTimeResult|null $registerTime
 */
class GenericRevisionInfo extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     deploymentGroups?: list<string>|null,
     *     firstUsedTime?: \Aws\Api\DateTimeResult|null,
     *     lastUsedTime?: \Aws\Api\DateTimeResult|null,
     *     registerTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
