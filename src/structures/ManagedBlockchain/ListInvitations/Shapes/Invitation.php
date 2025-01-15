<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InvitationId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property 'PENDING'|'ACCEPTED'|'ACCEPTING'|'REJECTED'|'EXPIRED'|null $Status
 * @property NetworkSummary|null $NetworkSummary
 * @property string|null $Arn
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     InvitationId?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING'|'ACCEPTED'|'ACCEPTING'|'REJECTED'|'EXPIRED'|null,
     *     NetworkSummary?: NetworkSummary|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
