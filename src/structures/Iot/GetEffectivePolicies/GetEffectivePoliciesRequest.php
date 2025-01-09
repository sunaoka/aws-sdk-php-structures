<?php

namespace Sunaoka\Aws\Structures\Iot\GetEffectivePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principal
 * @property string $cognitoIdentityPoolId
 * @property string $thingName
 */
class GetEffectivePoliciesRequest extends Request
{
    /**
     * @param array{
     *     principal?: string,
     *     cognitoIdentityPoolId?: string,
     *     thingName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
