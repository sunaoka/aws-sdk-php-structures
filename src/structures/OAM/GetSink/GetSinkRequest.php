<?php

namespace Sunaoka\Aws\Structures\OAM\GetSink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetSinkRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
