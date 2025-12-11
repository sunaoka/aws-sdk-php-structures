<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouterDestination>|null $Destinations
 * @property 'AUTOMATIC'|'SECRETS_MANAGER'|null $EncryptionType
 * @property string|null $SecretArn
 */
class RouterInputSettings extends Shape
{
    /**
     * @param array{
     *     Destinations?: list<RouterDestination>|null,
     *     EncryptionType?: 'AUTOMATIC'|'SECRETS_MANAGER'|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
