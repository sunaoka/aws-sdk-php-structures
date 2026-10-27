<?php

namespace Sunaoka\Aws\Structures\Billing\DisassociateContract;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contractArn
 */
class DisassociateContractRequest extends Request
{
    /**
     * @param array{contractArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
