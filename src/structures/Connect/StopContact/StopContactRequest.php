<?php

namespace Sunaoka\Aws\Structures\Connect\StopContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $InstanceId
 * @property Shapes\DisconnectReason|null $DisconnectReason
 */
class StopContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     InstanceId: string,
     *     DisconnectReason?: Shapes\DisconnectReason|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
