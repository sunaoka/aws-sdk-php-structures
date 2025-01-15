<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $pageToken
 */
class GetRelationalDatabaseBlueprintsRequest extends Request
{
    /**
     * @param array{pageToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
