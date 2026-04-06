<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetStreamGroupRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
