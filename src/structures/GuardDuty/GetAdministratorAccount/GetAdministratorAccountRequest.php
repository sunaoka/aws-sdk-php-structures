<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetAdministratorAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 */
class GetAdministratorAccountRequest extends Request
{
    /**
     * @param array{DetectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
