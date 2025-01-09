<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyWithoutPlaintext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property array<string, string> $EncryptionContext
 * @property 'AES_256'|'AES_128' $KeySpec
 * @property int $NumberOfBytes
 * @property list<string> $GrantTokens
 * @property bool $DryRun
 */
class GenerateDataKeyWithoutPlaintextRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     EncryptionContext?: array<string, string>,
     *     KeySpec?: 'AES_256'|'AES_128',
     *     NumberOfBytes?: int,
     *     GrantTokens?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
