<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteMitigationAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionName
 */
class DeleteMitigationActionRequest extends Request
{
    /**
     * @param array{actionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
