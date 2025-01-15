<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
