<?php

namespace Sunaoka\Aws\Structures\Chime\InviteUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InviteId
 * @property 'Pending'|'Accepted'|'Failed' $Status
 * @property string $EmailAddress
 * @property 'NotSent'|'Sent'|'Failed' $EmailStatus
 */
class Invite extends Shape
{
    /**
     * @param array{
     *     InviteId?: string,
     *     Status?: 'Pending'|'Accepted'|'Failed',
     *     EmailAddress?: string,
     *     EmailStatus?: 'NotSent'|'Sent'|'Failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
