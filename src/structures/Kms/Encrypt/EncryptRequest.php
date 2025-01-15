<?php

namespace Sunaoka\Aws\Structures\Kms\Encrypt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $Plaintext
 * @property array<string, string>|null $EncryptionContext
 * @property list<string>|null $GrantTokens
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null $EncryptionAlgorithm
 * @property bool|null $DryRun
 */
class EncryptRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Plaintext: string|resource|\Psr\Http\Message\StreamInterface,
     *     EncryptionContext?: array<string, string>|null,
     *     GrantTokens?: list<string>|null,
     *     EncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
