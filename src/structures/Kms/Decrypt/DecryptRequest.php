<?php

namespace Sunaoka\Aws\Structures\Kms\Decrypt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $CiphertextBlob
 * @property array<string, string> $EncryptionContext
 * @property list<string> $GrantTokens
 * @property string $KeyId
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $EncryptionAlgorithm
 * @property Shapes\RecipientInfo $Recipient
 * @property bool $DryRun
 */
class DecryptRequest extends Request
{
    /**
     * @param array{
     *     CiphertextBlob: string|resource|\Psr\Http\Message\StreamInterface,
     *     EncryptionContext?: array<string, string>,
     *     GrantTokens?: list<string>,
     *     KeyId?: string,
     *     EncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE',
     *     Recipient?: Shapes\RecipientInfo,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
