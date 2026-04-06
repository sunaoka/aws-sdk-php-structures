<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueFleetAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $fleetId
 */
class GetQueueFleetAssociationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     fleetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
