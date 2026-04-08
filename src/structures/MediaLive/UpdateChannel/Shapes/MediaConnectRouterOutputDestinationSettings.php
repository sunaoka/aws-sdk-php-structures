<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'SECRETS_MANAGER'|null $EncryptionType
 * @property string|null $SecretArn
 */
class MediaConnectRouterOutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: 'AUTOMATIC'|'SECRETS_MANAGER'|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
