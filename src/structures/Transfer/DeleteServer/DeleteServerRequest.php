<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 */
class DeleteServerRequest extends Request
{
    /**
     * @param array{ServerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
