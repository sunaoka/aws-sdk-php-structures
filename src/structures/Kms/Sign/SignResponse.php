<?php

namespace Sunaoka\Aws\Structures\Kms\Sign;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property \Psr\Http\Message\StreamInterface|null $Signature
 * @property 'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'|null $SigningAlgorithm
 */
class SignResponse extends Response
{
}
