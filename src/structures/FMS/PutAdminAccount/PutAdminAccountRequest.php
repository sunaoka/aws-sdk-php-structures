<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdminAccount
 * @property Shapes\AdminScope $AdminScope
 */
class PutAdminAccountRequest extends Request
{
    /**
     * @param array{
     *     AdminAccount: string,
     *     AdminScope?: Shapes\AdminScope
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
