<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 */
class StartRelationalDatabaseRequest extends Request
{
    /**
     * @param array{relationalDatabaseName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
