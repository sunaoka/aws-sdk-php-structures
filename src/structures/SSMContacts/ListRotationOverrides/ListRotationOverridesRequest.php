<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotationOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 */
class ListRotationOverridesRequest extends Request
{
    /**
     * @param array{
     *     RotationId: string,
     *     StartTime: \Aws\Api\DateTimeResult,
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
