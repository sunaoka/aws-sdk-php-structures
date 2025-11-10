<?php

namespace Sunaoka\Aws\Structures\Kms\Sign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $Message
 * @property 'RAW'|'DIGEST'|'EXTERNAL_MU'|null $MessageType
 * @property list<string>|null $GrantTokens
 * @property 'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'|'ML_DSA_SHAKE_256'|'ED25519_SHA_512'|'ED25519_PH_SHA_512' $SigningAlgorithm
 * @property bool|null $DryRun
 */
class SignRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Message: string|resource|\Psr\Http\Message\StreamInterface,
     *     MessageType?: 'RAW'|'DIGEST'|'EXTERNAL_MU'|null,
     *     GrantTokens?: list<string>|null,
     *     SigningAlgorithm: 'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'|'ML_DSA_SHAKE_256'|'ED25519_SHA_512'|'ED25519_PH_SHA_512',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
