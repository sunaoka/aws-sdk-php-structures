<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $RegionName
 * @property array<string, string>|null $UserPoolTags
 */
class CreateUserPoolReplicaRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     RegionName: string,
     *     UserPoolTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
