<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsLcmOpOccId
 */
class GetSolNetworkOperationRequest extends Request
{
    /**
     * @param array{nsLcmOpOccId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
