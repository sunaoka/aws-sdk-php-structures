<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 */
class GetManagedResourceRequest extends Request
{
    /**
     * @param array{resourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
