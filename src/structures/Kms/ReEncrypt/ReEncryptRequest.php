<?php

namespace Sunaoka\Aws\Structures\Kms\ReEncrypt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $CiphertextBlob
 * @property array<string, string> $SourceEncryptionContext
 * @property string $SourceKeyId
 * @property string $DestinationKeyId
 * @property array<string, string> $DestinationEncryptionContext
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $SourceEncryptionAlgorithm
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $DestinationEncryptionAlgorithm
 * @property list<string> $GrantTokens
 * @property bool $DryRun
 */
class ReEncryptRequest extends Request
{
    /**
     * @param array{
     *     CiphertextBlob: string|resource|\Psr\Http\Message\StreamInterface,
     *     SourceEncryptionContext?: array<string, string>,
     *     SourceKeyId?: string,
     *     DestinationKeyId: string,
     *     DestinationEncryptionContext?: array<string, string>,
     *     SourceEncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE',
     *     DestinationEncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE',
     *     GrantTokens?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
