<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdatePublishingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $DestinationId
 * @property Shapes\DestinationProperties $DestinationProperties
 */
class UpdatePublishingDestinationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     DestinationId: string,
     *     DestinationProperties?: Shapes\DestinationProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
