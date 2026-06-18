<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property 'TLS_V1'|'TLS_V1_2_2021'|'TLS_V1_3_2025'|null $SecurityPolicy
 */
class CustomDomainConfigType extends Shape
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     SecurityPolicy?: 'TLS_V1'|'TLS_V1_2_2021'|'TLS_V1_3_2025'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
