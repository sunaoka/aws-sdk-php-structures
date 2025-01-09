<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DisassociateFromMasterAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 */
class DisassociateFromMasterAccountRequest extends Request
{
    /**
     * @param array{DetectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
