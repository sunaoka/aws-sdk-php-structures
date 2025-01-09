<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteGeofenceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 */
class DeleteGeofenceCollectionRequest extends Request
{
    /**
     * @param array{CollectionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
