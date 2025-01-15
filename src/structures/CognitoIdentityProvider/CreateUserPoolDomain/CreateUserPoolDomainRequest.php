<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property string $UserPoolId
 * @property int|null $ManagedLoginVersion
 * @property Shapes\CustomDomainConfigType|null $CustomDomainConfig
 */
class CreateUserPoolDomainRequest extends Request
{
    /**
     * @param array{
     *     Domain: string,
     *     UserPoolId: string,
     *     ManagedLoginVersion?: int|null,
     *     CustomDomainConfig?: Shapes\CustomDomainConfigType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
