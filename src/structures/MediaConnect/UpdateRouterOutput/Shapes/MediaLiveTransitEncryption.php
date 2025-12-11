<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $EncryptionKeyType
 * @property MediaLiveTransitEncryptionKeyConfiguration $EncryptionKeyConfiguration
 */
class MediaLiveTransitEncryption extends Shape
{
    /**
     * @param array{
     *     EncryptionKeyType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     EncryptionKeyConfiguration: MediaLiveTransitEncryptionKeyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
