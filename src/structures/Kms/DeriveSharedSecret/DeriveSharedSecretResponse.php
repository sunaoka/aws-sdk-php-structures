<?php

namespace Sunaoka\Aws\Structures\Kms\DeriveSharedSecret;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KeyId
 * @property string $SharedSecret
 * @property string $CiphertextForRecipient
 * @property 'ECDH' $KeyAgreementAlgorithm
 * @property 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE' $KeyOrigin
 */
class DeriveSharedSecretResponse extends Response
{
}
