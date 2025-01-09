<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamId
 */
class DeleteStreamRequest extends Request
{
    /**
     * @param array{streamId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
