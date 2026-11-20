<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateCIMDPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $CIMDPolicyId
 * @property string $ClientId
 * @property string|null $PolicyName
 * @property int<86400, 31556952>|null $CacheDuration
 * @property list<string> $URLPatterns
 */
class UpdateCIMDPolicyRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     CIMDPolicyId: string,
     *     ClientId: string,
     *     PolicyName?: string|null,
     *     CacheDuration?: int<86400, 31556952>|null,
     *     URLPatterns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
