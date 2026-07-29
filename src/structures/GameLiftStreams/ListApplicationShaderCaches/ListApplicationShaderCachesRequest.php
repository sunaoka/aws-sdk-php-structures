<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListApplicationShaderCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class ListApplicationShaderCachesRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
