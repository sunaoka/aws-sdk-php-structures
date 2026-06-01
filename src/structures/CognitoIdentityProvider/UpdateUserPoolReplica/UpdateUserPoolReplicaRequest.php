<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $RegionName
 * @property 'ACTIVE'|'INACTIVE' $Status
 */
class UpdateUserPoolReplicaRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     RegionName: string,
     *     Status: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
