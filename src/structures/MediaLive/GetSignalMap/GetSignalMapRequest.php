<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetSignalMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetSignalMapRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
