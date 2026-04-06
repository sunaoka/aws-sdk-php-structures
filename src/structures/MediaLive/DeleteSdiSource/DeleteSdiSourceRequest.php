<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteSdiSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SdiSourceId
 */
class DeleteSdiSourceRequest extends Request
{
    /**
     * @param array{SdiSourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
