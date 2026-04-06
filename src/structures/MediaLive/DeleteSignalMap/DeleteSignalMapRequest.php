<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteSignalMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteSignalMapRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
