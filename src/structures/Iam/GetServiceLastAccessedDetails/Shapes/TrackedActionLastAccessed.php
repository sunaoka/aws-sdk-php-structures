<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionName
 * @property string|null $LastAccessedEntity
 * @property \Aws\Api\DateTimeResult|null $LastAccessedTime
 * @property string|null $LastAccessedRegion
 */
class TrackedActionLastAccessed extends Shape
{
    /**
     * @param array{
     *     ActionName?: string|null,
     *     LastAccessedEntity?: string|null,
     *     LastAccessedTime?: \Aws\Api\DateTimeResult|null,
     *     LastAccessedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
