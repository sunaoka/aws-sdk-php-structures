<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteCIMDPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $CIMDPolicyId
 */
class DeleteCIMDPolicyRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     CIMDPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
