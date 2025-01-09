<?php

namespace Sunaoka\Aws\Structures\Transfer\StartServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 */
class StartServerRequest extends Request
{
    /**
     * @param array{ServerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
