<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPoolReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $RegionName
 */
class DeleteUserPoolReplicaRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     RegionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
