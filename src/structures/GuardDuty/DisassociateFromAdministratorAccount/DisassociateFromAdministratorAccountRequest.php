<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DisassociateFromAdministratorAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 */
class DisassociateFromAdministratorAccountRequest extends Request
{
    /**
     * @param array{DetectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
