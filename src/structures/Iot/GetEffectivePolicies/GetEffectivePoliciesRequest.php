<?php

namespace Sunaoka\Aws\Structures\Iot\GetEffectivePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $principal
 * @property string|null $cognitoIdentityPoolId
 * @property string|null $thingName
 */
class GetEffectivePoliciesRequest extends Request
{
    /**
     * @param array{
     *     principal?: string|null,
     *     cognitoIdentityPoolId?: string|null,
     *     thingName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
