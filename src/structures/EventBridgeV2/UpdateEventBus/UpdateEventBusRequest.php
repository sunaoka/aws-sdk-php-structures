<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventBusArn
 * @property string|null $Description
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\StorageConfiguration|null $StorageConfiguration
 */
class UpdateEventBusRequest extends Request
{
    /**
     * @param array{
     *     EventBusArn: string,
     *     Description?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     StorageConfiguration?: Shapes\StorageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
