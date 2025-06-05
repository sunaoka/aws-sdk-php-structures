<?php

namespace Sunaoka\Aws\Structures\Kms\ReEncrypt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $CiphertextBlob
 * @property string|null $SourceKeyId
 * @property string|null $KeyId
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $SourceEncryptionAlgorithm
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $DestinationEncryptionAlgorithm
 * @property string|null $SourceKeyMaterialId
 * @property string|null $DestinationKeyMaterialId
 */
class ReEncryptResponse extends Response
{
}
