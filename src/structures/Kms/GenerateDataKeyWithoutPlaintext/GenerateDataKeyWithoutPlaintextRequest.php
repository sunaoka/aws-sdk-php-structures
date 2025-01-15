<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyWithoutPlaintext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property array<string, string>|null $EncryptionContext
 * @property 'AES_256'|'AES_128'|null $KeySpec
 * @property int<1, 1024>|null $NumberOfBytes
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 */
class GenerateDataKeyWithoutPlaintextRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     EncryptionContext?: array<string, string>|null,
     *     KeySpec?: 'AES_256'|'AES_128'|null,
     *     NumberOfBytes?: int<1, 1024>|null,
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
