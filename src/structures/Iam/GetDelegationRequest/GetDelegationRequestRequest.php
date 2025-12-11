<?php

namespace Sunaoka\Aws\Structures\Iam\GetDelegationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DelegationRequestId
 * @property bool|null $DelegationPermissionCheck
 */
class GetDelegationRequestRequest extends Request
{
    /**
     * @param array{
     *     DelegationRequestId: string,
     *     DelegationPermissionCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
