<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetRelationalDatabasesRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
