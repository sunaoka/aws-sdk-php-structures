<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetSecurityConfigRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
