<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetRelationalDatabaseBlueprintsRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
