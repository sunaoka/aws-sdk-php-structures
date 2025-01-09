<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commandId
 */
class GetCommandRequest extends Request
{
    /**
     * @param array{commandId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
