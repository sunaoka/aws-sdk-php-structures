<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\GetAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $action
 */
class GetActionRequest extends Request
{
    /**
     * @param array{action: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
