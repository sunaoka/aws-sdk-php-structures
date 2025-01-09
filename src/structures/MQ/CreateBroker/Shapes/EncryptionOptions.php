<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property bool $UseAwsOwnedKey
 */
class EncryptionOptions extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     UseAwsOwnedKey: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
