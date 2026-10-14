<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateHostKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $HostKeyId
 * @property string|null $Description
 * @property 'SERVICE_MANAGED'|'SECRETS_MANAGER'|null $StorageType
 * @property string|null $KmsKey
 */
class UpdateHostKeyRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     HostKeyId: string,
     *     Description?: string|null,
     *     StorageType?: 'SERVICE_MANAGED'|'SECRETS_MANAGER'|null,
     *     KmsKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
