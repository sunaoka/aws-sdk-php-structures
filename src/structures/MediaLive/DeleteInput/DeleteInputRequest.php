<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputId
 */
class DeleteInputRequest extends Request
{
    /**
     * @param array{InputId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
