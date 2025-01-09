<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeClientProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceIds
 */
class DescribeClientPropertiesRequest extends Request
{
    /**
     * @param array{ResourceIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
