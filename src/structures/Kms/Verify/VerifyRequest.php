<?php

namespace Sunaoka\Aws\Structures\Kms\Verify;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $Message
 * @property 'RAW'|'DIGEST' $MessageType
 * @property string|resource|\Psr\Http\Message\StreamInterface $Signature
 * @property 'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA' $SigningAlgorithm
 * @property list<string> $GrantTokens
 * @property bool $DryRun
 */
class VerifyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Message: string|resource|\Psr\Http\Message\StreamInterface,
     *     MessageType?: 'RAW'|'DIGEST',
     *     Signature: string|resource|\Psr\Http\Message\StreamInterface,
     *     SigningAlgorithm: 'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA',
     *     GrantTokens?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
