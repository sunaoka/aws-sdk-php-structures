<?php

namespace Sunaoka\Aws\Structures\MPA\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApproverId
 * @property string|null $IdentitySourceArn
 * @property string|null $IdentityId
 * @property 'APPROVED'|'REJECTED'|'NO_RESPONSE'|null $Response
 * @property \Aws\Api\DateTimeResult|null $ResponseTime
 */
class GetSessionResponseApproverResponse extends Shape
{
    /**
     * @param array{
     *     ApproverId?: string|null,
     *     IdentitySourceArn?: string|null,
     *     IdentityId?: string|null,
     *     Response?: 'APPROVED'|'REJECTED'|'NO_RESPONSE'|null,
     *     ResponseTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
