<?php

namespace Sunaoka\Aws\Structures\SecurityLake\RegisterDataLakeDelegatedAdministrator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class RegisterDataLakeDelegatedAdministratorRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
