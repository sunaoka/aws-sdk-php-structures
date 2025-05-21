<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueLimitAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $limitId
 */
class GetQueueLimitAssociationRequest extends Request
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
