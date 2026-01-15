<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HoursOfOperationId
 * @property string|null $HoursOfOperationArn
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $TimeZone
 * @property list<HoursOfOperationConfig>|null $Config
 * @property list<HoursOfOperationsIdentifier>|null $ParentHoursOfOperations
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class HoursOfOperation extends Shape
{
    /**
     * @param array{
     *     HoursOfOperationId?: string|null,
     *     HoursOfOperationArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     TimeZone?: string|null,
     *     Config?: list<HoursOfOperationConfig>|null,
     *     ParentHoursOfOperations?: list<HoursOfOperationsIdentifier>|null,
     *     Tags?: array<string, string>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
