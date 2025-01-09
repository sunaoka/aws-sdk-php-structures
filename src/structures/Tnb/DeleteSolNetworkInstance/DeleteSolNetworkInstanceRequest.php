<?php

namespace Sunaoka\Aws\Structures\Tnb\DeleteSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsInstanceId
 */
class DeleteSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{nsInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
