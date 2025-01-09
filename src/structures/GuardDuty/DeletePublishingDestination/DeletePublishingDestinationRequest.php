<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeletePublishingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $DestinationId
 */
class DeletePublishingDestinationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     DestinationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
