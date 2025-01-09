<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPS' $PolicyQualifierId
 * @property Qualifier $Qualifier
 */
class PolicyQualifierInfo extends Shape
{
    /**
     * @param array{
     *     PolicyQualifierId: 'CPS',
     *     Qualifier: Qualifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
