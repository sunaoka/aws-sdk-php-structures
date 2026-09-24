<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\StorageConfiguration|null $StorageConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateEventBusRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     StorageConfiguration?: Shapes\StorageConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
