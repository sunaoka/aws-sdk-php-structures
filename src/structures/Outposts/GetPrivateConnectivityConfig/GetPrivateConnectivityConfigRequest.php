<?php

namespace Sunaoka\Aws\Structures\Outposts\GetPrivateConnectivityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 */
class GetPrivateConnectivityConfigRequest extends Request
{
    /**
     * @param array{OutpostId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
