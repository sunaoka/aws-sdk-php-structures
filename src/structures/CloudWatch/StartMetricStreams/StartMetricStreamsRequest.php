<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StartMetricStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 */
class StartMetricStreamsRequest extends Request
{
    /**
     * @param array{Names: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
