<?php

namespace Sunaoka\Aws\Structures\Kms\ReEncrypt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $CiphertextBlob
 * @property array<string, string>|null $SourceEncryptionContext
 * @property string|null $SourceKeyId
 * @property string $DestinationKeyId
 * @property array<string, string>|null $DestinationEncryptionContext
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $SourceEncryptionAlgorithm
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $DestinationEncryptionAlgorithm
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 * @property list<'IGNORE_CIPHERTEXT'>|null $DryRunModifiers
 */
class ReEncryptRequest extends Request
{
    /**
     * @param array{
     *     CiphertextBlob?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     SourceEncryptionContext?: array<string, string>|null,
     *     SourceKeyId?: string|null,
     *     DestinationKeyId: string,
     *     DestinationEncryptionContext?: array<string, string>|null,
     *     SourceEncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null,
     *     DestinationEncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null,
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null,
     *     DryRunModifiers?: list<'IGNORE_CIPHERTEXT'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
