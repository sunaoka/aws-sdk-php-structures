<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property array<string, string> $EncryptionContext
 * @property int $NumberOfBytes
 * @property 'AES_256'|'AES_128' $KeySpec
 * @property list<string> $GrantTokens
 * @property Shapes\RecipientInfo $Recipient
 * @property bool $DryRun
 */
class GenerateDataKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     EncryptionContext?: array<string, string>,
     *     NumberOfBytes?: int,
     *     KeySpec?: 'AES_256'|'AES_128',
     *     GrantTokens?: list<string>,
     *     Recipient?: Shapes\RecipientInfo,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
