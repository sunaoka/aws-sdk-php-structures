<?php

namespace Sunaoka\Aws\Structures\MPA\DeleteIdentitySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentitySourceArn
 */
class DeleteIdentitySourceRequest extends Request
{
    /**
     * @param array{IdentitySourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
