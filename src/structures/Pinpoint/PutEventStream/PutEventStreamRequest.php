<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEventStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\WriteEventStream $WriteEventStream
 */
class PutEventStreamRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     WriteEventStream: Shapes\WriteEventStream
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
