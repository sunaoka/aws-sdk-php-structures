<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteUserByPrincipalId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PrincipalId
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class DeleteUserByPrincipalIdRequest extends Request
{
    /**
     * @param array{
     *     PrincipalId: string,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
