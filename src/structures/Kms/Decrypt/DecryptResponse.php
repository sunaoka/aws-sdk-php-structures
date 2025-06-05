<?php

namespace Sunaoka\Aws\Structures\Kms\Decrypt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property \Psr\Http\Message\StreamInterface $Plaintext
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $EncryptionAlgorithm
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $CiphertextForRecipient
 * @property string|null $KeyMaterialId
 */
class DecryptResponse extends Response
{
}
