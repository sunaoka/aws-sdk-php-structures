<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $EncryptionKeyType
 * @property RouterInputTransitEncryptionKeyConfiguration $EncryptionKeyConfiguration
 */
class RouterInputTransitEncryption extends Shape
{
    /**
     * @param array{
     *     EncryptionKeyType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     EncryptionKeyConfiguration: RouterInputTransitEncryptionKeyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
