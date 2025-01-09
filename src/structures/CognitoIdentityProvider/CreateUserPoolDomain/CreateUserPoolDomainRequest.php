<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property string $UserPoolId
 * @property int $ManagedLoginVersion
 * @property Shapes\CustomDomainConfigType $CustomDomainConfig
 */
class CreateUserPoolDomainRequest extends Request
{
    /**
     * @param array{
     *     Domain: string,
     *     UserPoolId: string,
     *     ManagedLoginVersion?: int,
     *     CustomDomainConfig?: Shapes\CustomDomainConfigType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
