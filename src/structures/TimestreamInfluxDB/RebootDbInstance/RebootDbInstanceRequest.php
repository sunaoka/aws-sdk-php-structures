<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RebootDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class RebootDbInstanceRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
