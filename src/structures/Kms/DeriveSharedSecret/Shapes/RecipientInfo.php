<?php

namespace Sunaoka\Aws\Structures\Kms\DeriveSharedSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSAES_OAEP_SHA_256' $KeyEncryptionAlgorithm
 * @property string|resource|\Psr\Http\Message\StreamInterface $AttestationDocument
 */
class RecipientInfo extends Shape
{
    /**
     * @param array{
     *     KeyEncryptionAlgorithm?: 'RSAES_OAEP_SHA_256',
     *     AttestationDocument?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
