<?php

namespace Sunaoka\Aws\Structures\Transfer\StopServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 */
class StopServerRequest extends Request
{
    /**
     * @param array{ServerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
