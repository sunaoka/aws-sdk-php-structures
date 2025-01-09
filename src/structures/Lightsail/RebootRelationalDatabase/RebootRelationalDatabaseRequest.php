<?php

namespace Sunaoka\Aws\Structures\Lightsail\RebootRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 */
class RebootRelationalDatabaseRequest extends Request
{
    /**
     * @param array{relationalDatabaseName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
