<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
