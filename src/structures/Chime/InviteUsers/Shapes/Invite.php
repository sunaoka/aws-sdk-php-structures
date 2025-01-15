<?php

namespace Sunaoka\Aws\Structures\Chime\InviteUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InviteId
 * @property 'Pending'|'Accepted'|'Failed'|null $Status
 * @property string|null $EmailAddress
 * @property 'NotSent'|'Sent'|'Failed'|null $EmailStatus
 */
class Invite extends Shape
{
    /**
     * @param array{
     *     InviteId?: string|null,
     *     Status?: 'Pending'|'Accepted'|'Failed'|null,
     *     EmailAddress?: string|null,
     *     EmailStatus?: 'NotSent'|'Sent'|'Failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
