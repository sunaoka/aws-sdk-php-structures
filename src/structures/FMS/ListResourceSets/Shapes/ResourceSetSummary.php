<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null $ResourceSetStatus
 */
class ResourceSetSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceSetStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
