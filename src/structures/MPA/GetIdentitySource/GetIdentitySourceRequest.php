<?php

namespace Sunaoka\Aws\Structures\MPA\GetIdentitySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentitySourceArn
 */
class GetIdentitySourceRequest extends Request
{
    /**
     * @param array{IdentitySourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
