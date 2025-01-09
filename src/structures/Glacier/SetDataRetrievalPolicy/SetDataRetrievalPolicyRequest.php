<?php

namespace Sunaoka\Aws\Structures\Glacier\SetDataRetrievalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property Shapes\DataRetrievalPolicy $Policy
 */
class SetDataRetrievalPolicyRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     Policy?: Shapes\DataRetrievalPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
