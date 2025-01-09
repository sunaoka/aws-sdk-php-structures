<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InvitationId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property 'PENDING'|'ACCEPTED'|'ACCEPTING'|'REJECTED'|'EXPIRED' $Status
 * @property NetworkSummary $NetworkSummary
 * @property string $Arn
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     InvitationId?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     Status?: 'PENDING'|'ACCEPTED'|'ACCEPTING'|'REJECTED'|'EXPIRED',
     *     NetworkSummary?: NetworkSummary,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
