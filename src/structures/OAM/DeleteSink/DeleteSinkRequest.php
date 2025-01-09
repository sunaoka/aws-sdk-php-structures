<?php

namespace Sunaoka\Aws\Structures\OAM\DeleteSink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteSinkRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
