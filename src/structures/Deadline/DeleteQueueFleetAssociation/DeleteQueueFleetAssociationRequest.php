<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteQueueFleetAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $fleetId
 */
class DeleteQueueFleetAssociationRequest extends Request
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
