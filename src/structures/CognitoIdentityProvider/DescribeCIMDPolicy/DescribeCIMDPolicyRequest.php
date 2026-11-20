<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeCIMDPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $CIMDPolicyId
 */
class DescribeCIMDPolicyRequest extends Request
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
