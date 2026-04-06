<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteDbInstanceRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
