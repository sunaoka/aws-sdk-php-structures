<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateEventBus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyIdentifier
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{KmsKeyIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
