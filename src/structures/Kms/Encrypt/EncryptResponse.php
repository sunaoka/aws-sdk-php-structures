<?php

namespace Sunaoka\Aws\Structures\Kms\Encrypt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CiphertextBlob
 * @property string $KeyId
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $EncryptionAlgorithm
 */
class EncryptResponse extends Response
{
}
