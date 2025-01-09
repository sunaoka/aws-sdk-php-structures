<?php

namespace Sunaoka\Aws\Structures\Kms\Decrypt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KeyId
 * @property string $Plaintext
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $EncryptionAlgorithm
 * @property string $CiphertextForRecipient
 */
class DecryptResponse extends Response
{
}
