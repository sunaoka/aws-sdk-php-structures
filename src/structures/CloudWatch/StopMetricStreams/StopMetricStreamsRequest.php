<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StopMetricStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 */
class StopMetricStreamsRequest extends Request
{
    /**
     * @param array{Names: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
