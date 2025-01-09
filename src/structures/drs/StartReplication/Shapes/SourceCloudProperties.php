<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $originAccountID
 * @property string $originAvailabilityZone
 * @property string $originRegion
 * @property string $sourceOutpostArn
 */
class SourceCloudProperties extends Shape
{
    /**
     * @param array{
     *     originAccountID?: string,
     *     originAvailabilityZone?: string,
     *     originRegion?: string,
     *     sourceOutpostArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
