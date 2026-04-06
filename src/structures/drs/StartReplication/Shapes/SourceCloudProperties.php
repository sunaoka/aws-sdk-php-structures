<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $originAccountID
 * @property string|null $originAvailabilityZone
 * @property string|null $originRegion
 * @property string|null $sourceOutpostArn
 */
class SourceCloudProperties extends Shape
{
    /**
     * @param array{
     *     originAccountID?: string|null,
     *     originAvailabilityZone?: string|null,
     *     originRegion?: string|null,
     *     sourceOutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
