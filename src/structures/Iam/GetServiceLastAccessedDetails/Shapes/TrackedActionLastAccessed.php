<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionName
 * @property string $LastAccessedEntity
 * @property \Aws\Api\DateTimeResult $LastAccessedTime
 * @property string $LastAccessedRegion
 */
class TrackedActionLastAccessed extends Shape
{
    /**
     * @param array{
     *     ActionName?: string,
     *     LastAccessedEntity?: string,
     *     LastAccessedTime?: \Aws\Api\DateTimeResult,
     *     LastAccessedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
