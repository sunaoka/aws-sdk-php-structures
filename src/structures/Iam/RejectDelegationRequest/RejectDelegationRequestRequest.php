<?php

namespace Sunaoka\Aws\Structures\Iam\RejectDelegationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DelegationRequestId
 * @property string|null $Notes
 */
class RejectDelegationRequestRequest extends Request
{
    /**
     * @param array{
     *     DelegationRequestId: string,
     *     Notes?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
