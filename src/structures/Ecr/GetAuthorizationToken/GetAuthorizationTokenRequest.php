<?php

namespace Sunaoka\Aws\Structures\Ecr\GetAuthorizationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $registryIds
 */
class GetAuthorizationTokenRequest extends Request
{
    /**
     * @param array{registryIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
