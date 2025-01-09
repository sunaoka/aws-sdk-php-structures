<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 */
class GetRelationalDatabaseRequest extends Request
{
    /**
     * @param array{relationalDatabaseName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
