<?php

namespace Sunaoka\Aws\Structures\Appstream\DrainSessionInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class DrainSessionInstanceRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
