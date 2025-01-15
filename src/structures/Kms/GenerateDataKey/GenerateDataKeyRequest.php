<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property array<string, string>|null $EncryptionContext
 * @property int<1, 1024>|null $NumberOfBytes
 * @property 'AES_256'|'AES_128'|null $KeySpec
 * @property list<string>|null $GrantTokens
 * @property Shapes\RecipientInfo|null $Recipient
 * @property bool|null $DryRun
 */
class GenerateDataKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     EncryptionContext?: array<string, string>|null,
     *     NumberOfBytes?: int<1, 1024>|null,
     *     KeySpec?: 'AES_256'|'AES_128'|null,
     *     GrantTokens?: list<string>|null,
     *     Recipient?: Shapes\RecipientInfo|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
