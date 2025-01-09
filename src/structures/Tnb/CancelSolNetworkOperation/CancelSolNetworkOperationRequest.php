<?php

namespace Sunaoka\Aws\Structures\Tnb\CancelSolNetworkOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsLcmOpOccId
 */
class CancelSolNetworkOperationRequest extends Request
{
    /**
     * @param array{nsLcmOpOccId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
