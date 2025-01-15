<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSAES_OAEP_SHA_256'|null $KeyEncryptionAlgorithm
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $AttestationDocument
 */
class RecipientInfo extends Shape
{
    /**
     * @param array{
     *     KeyEncryptionAlgorithm?: 'RSAES_OAEP_SHA_256'|null,
     *     AttestationDocument?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
