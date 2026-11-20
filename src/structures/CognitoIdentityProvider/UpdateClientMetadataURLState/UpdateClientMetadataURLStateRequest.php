<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateClientMetadataURLState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $CIMDPolicyId
 * @property string $URL
 * @property 'REFRESH'|'INVALIDATE' $Action
 */
class UpdateClientMetadataURLStateRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     CIMDPolicyId: string,
     *     URL: string,
     *     Action: 'REFRESH'|'INVALIDATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
