<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotationShifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 */
class ListRotationShiftsRequest extends Request
{
    /**
     * @param array{
     *     RotationId: string,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
