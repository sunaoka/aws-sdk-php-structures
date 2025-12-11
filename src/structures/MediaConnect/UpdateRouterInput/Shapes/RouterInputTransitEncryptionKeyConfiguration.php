<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerEncryptionKeyConfiguration|null $SecretsManager
 * @property AutomaticEncryptionKeyConfiguration|null $Automatic
 */
class RouterInputTransitEncryptionKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretsManager?: SecretsManagerEncryptionKeyConfiguration|null,
     *     Automatic?: AutomaticEncryptionKeyConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
