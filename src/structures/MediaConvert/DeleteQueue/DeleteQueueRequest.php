<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DeleteQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteQueueRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
