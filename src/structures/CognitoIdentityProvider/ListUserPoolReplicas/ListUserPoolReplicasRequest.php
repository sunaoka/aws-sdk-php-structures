<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string|null $NextToken
 */
class ListUserPoolReplicasRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
