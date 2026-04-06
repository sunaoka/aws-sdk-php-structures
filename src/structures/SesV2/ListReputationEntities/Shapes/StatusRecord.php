<?php

namespace Sunaoka\Aws\Structures\SesV2\ListReputationEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'REINSTATED'|'DISABLED'|null $Status
 * @property string|null $Cause
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class StatusRecord extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'REINSTATED'|'DISABLED'|null,
     *     Cause?: string|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
