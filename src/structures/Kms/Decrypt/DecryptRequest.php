<?php

namespace Sunaoka\Aws\Structures\Kms\Decrypt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $CiphertextBlob
 * @property array<string, string>|null $EncryptionContext
 * @property list<string>|null $GrantTokens
 * @property string|null $KeyId
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $EncryptionAlgorithm
 * @property Shapes\RecipientInfo|null $Recipient
 * @property bool|null $DryRun
 */
class DecryptRequest extends Request
{
    /**
     * @param array{
     *     CiphertextBlob: string|resource|\Psr\Http\Message\StreamInterface,
     *     EncryptionContext?: array<string, string>|null,
     *     GrantTokens?: list<string>|null,
     *     KeyId?: string|null,
     *     EncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null,
     *     Recipient?: Shapes\RecipientInfo|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
