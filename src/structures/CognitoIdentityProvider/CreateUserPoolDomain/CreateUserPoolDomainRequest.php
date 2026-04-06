<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property string $UserPoolId
 * @property Shapes\CustomDomainConfigType|null $CustomDomainConfig
 */
class CreateUserPoolDomainRequest extends Request
{
    /**
     * @param array{
     *     Domain: string,
     *     UserPoolId: string,
     *     CustomDomainConfig?: Shapes\CustomDomainConfigType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
