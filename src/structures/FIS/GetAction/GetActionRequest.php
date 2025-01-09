<?php

namespace Sunaoka\Aws\Structures\FIS\GetAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetActionRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
