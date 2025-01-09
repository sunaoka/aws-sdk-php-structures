<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetOperationsRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
