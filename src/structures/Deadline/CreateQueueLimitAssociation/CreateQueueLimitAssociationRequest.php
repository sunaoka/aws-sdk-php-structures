<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueLimitAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $limitId
 */
class CreateQueueLimitAssociationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     limitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
