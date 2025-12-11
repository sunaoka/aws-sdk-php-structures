<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouterDestinationSettings>|null $Destinations
 * @property 'AUTOMATIC'|'SECRETS_MANAGER'|null $EncryptionType
 * @property string|null $SecretArn
 */
class RouterSettings extends Shape
{
    /**
     * @param array{
     *     Destinations?: list<RouterDestinationSettings>|null,
     *     EncryptionType?: 'AUTOMATIC'|'SECRETS_MANAGER'|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
