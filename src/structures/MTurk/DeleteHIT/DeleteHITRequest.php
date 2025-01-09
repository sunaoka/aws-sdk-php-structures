<?php

namespace Sunaoka\Aws\Structures\MTurk\DeleteHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 */
class DeleteHITRequest extends Request
{
    /**
     * @param array{HITId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
