<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetDbParameterGroupRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
