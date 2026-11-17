<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteAllEntitySessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EntityId
 * @property 'USER' $EntityType
 */
class DeleteAllEntitySessionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EntityId: string,
     *     EntityType: 'USER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
