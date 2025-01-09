<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Name
 * @property string $AllowedValues
 * @property string $AppliedValue
 * @property string $RequestedValue
 * @property 'Requested'|'Updating'|'Updated'|'Failed'|'Default' $RequestStatus
 * @property array<string, 'Requested'|'Updating'|'Updated'|'Failed'|'Default'> $RequestDetailedStatus
 * @property string $RequestStatusMessage
 * @property \Aws\Api\DateTimeResult $LastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult $LastRequestedDateTime
 * @property string $DataType
 */
class SettingEntry extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Name?: string,
     *     AllowedValues?: string,
     *     AppliedValue?: string,
     *     RequestedValue?: string,
     *     RequestStatus?: 'Requested'|'Updating'|'Updated'|'Failed'|'Default',
     *     RequestDetailedStatus?: array<string, 'Requested'|'Updating'|'Updated'|'Failed'|'Default'>,
     *     RequestStatusMessage?: string,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     LastRequestedDateTime?: \Aws\Api\DateTimeResult,
     *     DataType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
