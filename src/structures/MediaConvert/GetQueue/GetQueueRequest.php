<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetQueueRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
