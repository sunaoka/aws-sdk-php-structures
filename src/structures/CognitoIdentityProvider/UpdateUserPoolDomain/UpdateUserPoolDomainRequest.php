<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property string $UserPoolId
 * @property int $ManagedLoginVersion
 * @property Shapes\CustomDomainConfigType $CustomDomainConfig
 */
class UpdateUserPoolDomainRequest extends Request
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
