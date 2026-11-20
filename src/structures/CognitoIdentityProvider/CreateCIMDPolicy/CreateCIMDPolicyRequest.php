<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateCIMDPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $PolicyName
 * @property int<86400, 31556952>|null $CacheDuration
 * @property list<string> $URLPatterns
 */
class CreateCIMDPolicyRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     PolicyName: string,
     *     CacheDuration?: int<86400, 31556952>|null,
     *     URLPatterns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
