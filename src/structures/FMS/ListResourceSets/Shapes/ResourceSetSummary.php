<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE' $ResourceSetStatus
 */
class ResourceSetSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     ResourceSetStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
