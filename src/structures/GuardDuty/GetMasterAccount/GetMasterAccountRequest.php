<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMasterAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 */
class GetMasterAccountRequest extends Request
{
    /**
     * @param array{DetectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
