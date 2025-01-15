<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueMaxContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property int<0, max>|null $MaxContacts
 */
class UpdateQueueMaxContactsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     MaxContacts?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
