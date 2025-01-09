<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEventStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class GetEventStreamRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
