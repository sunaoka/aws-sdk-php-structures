<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 * @property list<Shapes\Processor> $transformerConfig
 */
class PutTransformerRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifier: string,
     *     transformerConfig: list<Shapes\Processor>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
