<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteConnectionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionType
 */
class DeleteConnectionTypeRequest extends Request
{
    /**
     * @param array{ConnectionType: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
