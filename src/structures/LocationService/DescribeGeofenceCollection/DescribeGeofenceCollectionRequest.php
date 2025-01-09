<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeGeofenceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 */
class DescribeGeofenceCollectionRequest extends Request
{
    /**
     * @param array{CollectionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
