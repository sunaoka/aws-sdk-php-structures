<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationDataSharingType
 */
class ResourceDataSyncDestinationDataSharing extends Shape
{
    /**
     * @param array{DestinationDataSharingType?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
