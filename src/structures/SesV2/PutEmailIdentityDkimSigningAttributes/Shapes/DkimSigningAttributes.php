<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimSigningAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainSigningSelector
 * @property string|null $DomainSigningPrivateKey
 * @property 'RSA_1024_BIT'|'RSA_2048_BIT'|null $NextSigningKeyLength
 */
class DkimSigningAttributes extends Shape
{
    /**
     * @param array{
     *     DomainSigningSelector?: string|null,
     *     DomainSigningPrivateKey?: string|null,
     *     NextSigningKeyLength?: 'RSA_1024_BIT'|'RSA_2048_BIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
