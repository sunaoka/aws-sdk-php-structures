<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdminAccount
 */
class GetAdminScopeRequest extends Request
{
    /**
     * @param array{AdminAccount: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
