<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationDataSharingType
 */
class ResourceDataSyncDestinationDataSharing extends Shape
{
    /**
     * @param array{DestinationDataSharingType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
