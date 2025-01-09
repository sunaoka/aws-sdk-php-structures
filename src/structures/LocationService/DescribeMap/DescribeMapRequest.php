<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 */
class DescribeMapRequest extends Request
{
    /**
     * @param array{MapName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
