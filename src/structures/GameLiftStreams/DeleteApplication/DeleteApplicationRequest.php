<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
