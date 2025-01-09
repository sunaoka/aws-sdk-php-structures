<?php

namespace Sunaoka\Aws\Structures\FMS\GetProtectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $MemberAccountId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetProtectionStatusRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     MemberAccountId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
