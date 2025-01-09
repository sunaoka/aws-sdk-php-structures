<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseLogStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 */
class GetRelationalDatabaseLogStreamsRequest extends Request
{
    /**
     * @param array{relationalDatabaseName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
