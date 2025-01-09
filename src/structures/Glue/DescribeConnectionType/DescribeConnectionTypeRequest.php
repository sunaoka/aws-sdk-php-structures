<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionType
 */
class DescribeConnectionTypeRequest extends Request
{
    /**
     * @param array{ConnectionType: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
