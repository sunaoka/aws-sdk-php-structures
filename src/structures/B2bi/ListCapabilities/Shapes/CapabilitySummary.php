<?php

namespace Sunaoka\Aws\Structures\B2bi\ListCapabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capabilityId
 * @property string $name
 * @property 'edi' $type
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class CapabilitySummary extends Shape
{
    /**
     * @param array{
     *     capabilityId: string,
     *     name: string,
     *     type: 'edi',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
