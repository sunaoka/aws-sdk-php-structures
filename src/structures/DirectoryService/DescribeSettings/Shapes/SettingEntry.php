<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Name
 * @property string|null $AllowedValues
 * @property string|null $AppliedValue
 * @property string|null $RequestedValue
 * @property 'Requested'|'Updating'|'Updated'|'Failed'|'Default'|null $RequestStatus
 * @property array<string, 'Requested'|'Updating'|'Updated'|'Failed'|'Default'>|null $RequestDetailedStatus
 * @property string|null $RequestStatusMessage
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult|null $LastRequestedDateTime
 * @property string|null $DataType
 */
class SettingEntry extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Name?: string|null,
     *     AllowedValues?: string|null,
     *     AppliedValue?: string|null,
     *     RequestedValue?: string|null,
     *     RequestStatus?: 'Requested'|'Updating'|'Updated'|'Failed'|'Default'|null,
     *     RequestDetailedStatus?: array<string, 'Requested'|'Updating'|'Updated'|'Failed'|'Default'>|null,
     *     RequestStatusMessage?: string|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastRequestedDateTime?: \Aws\Api\DateTimeResult|null,
     *     DataType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
