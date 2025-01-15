<?php

namespace Sunaoka\Aws\Structures\FMS\GetProtectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string|null $MemberAccountId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetProtectionStatusRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     MemberAccountId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
