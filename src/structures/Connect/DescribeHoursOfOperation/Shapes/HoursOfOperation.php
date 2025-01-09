<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeHoursOfOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HoursOfOperationId
 * @property string $HoursOfOperationArn
 * @property string $Name
 * @property string $Description
 * @property string $TimeZone
 * @property list<HoursOfOperationConfig> $Config
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class HoursOfOperation extends Shape
{
    /**
     * @param array{
     *     HoursOfOperationId?: string,
     *     HoursOfOperationArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     TimeZone?: string,
     *     Config?: list<HoursOfOperationConfig>,
     *     Tags?: array<string, string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
