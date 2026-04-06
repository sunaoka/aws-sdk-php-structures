<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JiraIssueUrl
 * @property \Aws\Api\DateTimeResult|null $LastSyncedTime
 */
class JiraConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraIssueUrl?: string|null,
     *     LastSyncedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
