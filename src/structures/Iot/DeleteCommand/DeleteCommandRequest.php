<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commandId
 */
class DeleteCommandRequest extends Request
{
    /**
     * @param array{commandId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
