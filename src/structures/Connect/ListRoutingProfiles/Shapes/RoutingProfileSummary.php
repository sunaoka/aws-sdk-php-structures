<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class RoutingProfileSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
