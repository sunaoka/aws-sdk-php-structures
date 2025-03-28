<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 */
class CustomDomainConfigType extends Shape
{
    /**
     * @param array{CertificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
