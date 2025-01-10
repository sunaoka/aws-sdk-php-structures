<?php

namespace Sunaoka\Aws\Structures\Kms\DeriveSharedSecret;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KeyId
 * @property \Psr\Http\Message\StreamInterface $SharedSecret
 * @property \Psr\Http\Message\StreamInterface $CiphertextForRecipient
 * @property 'ECDH' $KeyAgreementAlgorithm
 * @property 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE' $KeyOrigin
 */
class DeriveSharedSecretResponse extends Response
{
}
