<?php

namespace Sunaoka\Aws\Structures\MTurk\GetHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 */
class GetHITRequest extends Request
{
    /**
     * @param array{HITId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
