<?php

namespace Sunaoka\Aws\Structures\Kms\Encrypt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface|null $CiphertextBlob
 * @property string|null $KeyId
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $EncryptionAlgorithm
 */
class EncryptResponse extends Response
{
}
