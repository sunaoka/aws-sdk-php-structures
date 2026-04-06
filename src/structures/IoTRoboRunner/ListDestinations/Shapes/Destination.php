<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string $site
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ENABLED'|'DISABLED'|'DECOMMISSIONED' $state
 * @property string|null $additionalFixedProperties
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name: string,
     *     site: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     state: 'ENABLED'|'DISABLED'|'DECOMMISSIONED',
     *     additionalFixedProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
