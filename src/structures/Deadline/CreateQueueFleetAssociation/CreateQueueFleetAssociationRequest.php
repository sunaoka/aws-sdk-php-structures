<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueFleetAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $queueId
 */
class CreateQueueFleetAssociationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
