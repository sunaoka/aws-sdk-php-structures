<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsInstanceId
 */
class GetSolNetworkInstanceRequest extends Request
{
    /**
     * @param array{nsInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
