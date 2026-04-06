<?php

namespace Sunaoka\Aws\Structures\Redshift\GetIdentityCenterAuthToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ClusterIds
 */
class GetIdentityCenterAuthTokenRequest extends Request
{
    /**
     * @param array{ClusterIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
