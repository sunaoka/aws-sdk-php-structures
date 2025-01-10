<?php

namespace Sunaoka\Aws\Structures\Kms\ReEncrypt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $CiphertextBlob
 * @property string $SourceKeyId
 * @property string $KeyId
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $SourceEncryptionAlgorithm
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $DestinationEncryptionAlgorithm
 */
class ReEncryptResponse extends Response
{
}
