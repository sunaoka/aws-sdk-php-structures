<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateChannelMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $InvitedBy
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property list<Identity> $Members
 * @property string $ChannelArn
 */
class BatchChannelMemberships extends Shape
{
    /**
     * @param array{
     *     InvitedBy?: Identity,
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     Members?: list<Identity>,
     *     ChannelArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
