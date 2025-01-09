<?php

namespace Sunaoka\Aws\Structures\Glacier\GetDataRetrievalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class GetDataRetrievalPolicyRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
