<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateRandom\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSAES_OAEP_SHA_256' $KeyEncryptionAlgorithm
 * @property string $AttestationDocument
 */
class RecipientInfo extends Shape
{
    /**
     * @param array{
     *     KeyEncryptionAlgorithm?: 'RSAES_OAEP_SHA_256',
     *     AttestationDocument?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
