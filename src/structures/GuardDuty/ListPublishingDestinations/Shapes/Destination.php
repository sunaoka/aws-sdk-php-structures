<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListPublishingDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationId
 * @property 'S3' $DestinationType
 * @property 'PENDING_VERIFICATION'|'PUBLISHING'|'UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY'|'STOPPED' $Status
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     DestinationId: string,
     *     DestinationType: 'S3',
     *     Status: 'PENDING_VERIFICATION'|'PUBLISHING'|'UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY'|'STOPPED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
