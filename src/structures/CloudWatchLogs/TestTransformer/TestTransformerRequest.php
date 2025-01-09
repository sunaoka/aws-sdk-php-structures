<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Processor> $transformerConfig
 * @property list<string> $logEventMessages
 */
class TestTransformerRequest extends Request
{
    /**
     * @param array{
     *     transformerConfig: list<Shapes\Processor>,
     *     logEventMessages: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
