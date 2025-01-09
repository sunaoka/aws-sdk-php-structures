<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetDbInstanceRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
